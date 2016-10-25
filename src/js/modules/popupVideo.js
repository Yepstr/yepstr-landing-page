var $ = require('jquery');

var PopupVideo = {
  init: function() {
    var $popupVideoButton = $('.js-popup-video-button');
    if ($popupVideoButton.length == 0) return;

    var isMobile = $(window).width() < app.breakpoints.medium;
    var $backgroundVideo = $('.js-full-screen-video');

    var beforeOpen = function() {
      if (!isMobile && $backgroundVideo.length !== 0) {
        $backgroundVideo[0].pause();
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
        beforeClose: beforeClose,
      },
    });
  },
};

module.exports = PopupVideo;
