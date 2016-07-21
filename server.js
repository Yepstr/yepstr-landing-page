var express = require('express');
var app = express();

// Redirect if not using www domain
var forceWWW = function(req, res, next) {
  var host = req.get('Host');
  // If we are not visiting the site from www, redirect to www
  // unless we visit the herokuapp domain
  if (host.substr(0, 3) !== 'www' && host.substr(-13) !== 'herokuapp.com') {
    return res.redirect(301, ['https://www.', req.get('Host'), req.url].join(''));
  }
  return next();
};


// redirect users to https address to avoid cross domain issues & keep users safe
var forceSSL = function(req, res, next) {
  // x-forward-proto is a heroku tag that is added to all requests
  if (req.headers['x-forwarded-proto'] !== 'https') {
    return res.redirect(301, ['https://', req.get('Host'), req.url].join(''));
  }
  return next(); /* Continue to other routes if we're not redirecting */
};

if (process.env.NODE_ENV === 'production') {
  // only use in production environment
  app.use('*', forceWWW);
  app.use('*', forceSSL);
}

app.use(express.static(__dirname + '/build'));
app.listen(process.env.PORT || 8000);
