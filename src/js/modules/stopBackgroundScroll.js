var $ = require('jquery');

var stopBackgroundScroll = {
  init: function() {
    // init button click
    $('.hamburger-menu').on('touchmove', function(e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
    });
  }
};

module.exports = stopBackgroundScroll;