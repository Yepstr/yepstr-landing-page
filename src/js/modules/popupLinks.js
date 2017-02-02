var $ = require('jquery');
var globals = require('modules/globals');

var PopupLinks = {
  init: function() {
    $('.js-modal-toggle').magnificPopup({
      type: 'inline',

  		fixedContentPos: false,
  		fixedBgPos: true,

  		overflowY: 'auto',

  		closeBtnInside: true,
  		preloader: false,

  		midClick: true,
  		removalDelay: 300,
  		mainClass: 'my-mfp-zoom-in'
    });
  },
};

module.exports = PopupLinks;
