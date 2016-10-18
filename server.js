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

// This route is needed for creating SSL certs for the app
var letsEncryptChallenge = process.env.LETSENCRYPT_CHALLENGE;
if (letsEncryptChallenge) {
  console.log('setting up letsencrypt route at', letsEncryptChallenge);
  app.get(['/.well-known/acme-challenge/', letsEncryptChallenge].join(''),
    function (request, response) {
      response.send(process.env.LETSENCRYPT_CONTENT);
    });
}

const BLOG_LOCATION = 'http://blog.yepstr.com';
var redirectBlog = function(req, res, next) {
  if (req.url.indexOf('/blog') === 0) {
    const blogUrl = req.url.substr(5); // remove "/blog" from the url
    res.redirect(301, [BLOG_LOCATION, blogUrl].join(''));
  } else {
    next();
  }
};

if (process.env.NODE_ENV === 'production') {
  // only use in production environment
  app.use('*', forceWWW);
  app.use('*', forceSSL);
}

app.use(redirectBlog);
app.use(express.static(__dirname + '/build', { 'extensions': ['html'] }));
app.listen(process.env.PORT || 8000);
