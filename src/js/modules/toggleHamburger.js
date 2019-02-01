var $ = require('jquery');

var toggleHamburger = {
  init: function() {
    // init button click
    $('#hamburger').click(function() {
      $('.hamburger-menu').toggleClass('expand')
      $('#hamburger').toggleClass('open')
    });
  }
};

module.exports = toggleHamburger;
