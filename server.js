var express = require('express');
var app = express();
app.use(express.static(__dirname + '/build'));

// redirect users to https address to avoid cross domain issues & keep users safe
var forceSSL = function('*', (req, res, next) {
  // x-forward-proto is a heroku tag that is added to all requests
  if (req.headers['x-forwarded-proto'] !== 'https') {
    return res.redirect(301, ['https://', req.get('Host'), req.url].join(''));
  }
  return next(); /* Continue to other routes if we're not redirecting */
});

if (process.env.NODE_ENV === 'production') {
  // only use in production environment
  // app.use(forceSSL);
}

app.listen(process.env.PORT || 8000);
