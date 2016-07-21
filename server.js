var express = require('express');
var app = express();

// redirect users to https address to avoid cross domain issues & keep users safe
var forceSSL = function(req, res, next) {
  // x-forward-proto is a heroku tag that is added to all requests
  if (req.headers['x-forwarded-proto'] !== 'https') {
    return res.redirect(301, ['https://', req.get('Host'), req.url].join(''));
  }
  return next(); /* Continue to other routes if we're not redirecting */
};
var forceWWW = function(req, res, next) {
  if (req.headers.host.slice(0, 3) !== 'www') {
    return res.redirect(301, ['https://www.', req.get('Host'), req.url].join(''));
  }
  return next();
};

if (process.env.NODE_ENV === 'production') {
  // only use in production environment
  app.use('*', forceWWW);
  app.use('*', forceSSL);
}

app.use(express.static(__dirname + '/build'));
app.listen(process.env.PORT || 8000);
