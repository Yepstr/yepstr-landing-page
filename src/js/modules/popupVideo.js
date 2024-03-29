var $ = require('jquery');
var globals = require('modules/globals');

var PopupVideo = {
  init: function() {
    var $popupVideoButton = $('.js-popup-video-button');
    if ($popupVideoButton.length == 0) return;

    var isMobile = $(window).width() < globals.breakpoints.medium;
    var $backgroundVideo = $('.js-full-screen-video');

    var beforeOpen = function() {
      if (!isMobile && $backgroundVideo.length !== 0) {
        $backgroundVideo[0].pause();
      }
    };
    
    var onOpen = function() {
      if(ytTracker !== null) {
        ytTracker.init();
      }
    };
    
    var beforeClose = function() {
      if (!isMobile && $backgroundVideo.length !== 0) {
        $backgroundVideo[0].play();
      }
    };

    $popupVideoButton.magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
      callbacks: {
        beforeOpen: beforeOpen,
        open: onOpen,
        beforeClose: beforeClose,
      },
    });
  },
};

module.exports = PopupVideo;
