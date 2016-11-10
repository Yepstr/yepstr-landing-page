var $ = require('jquery');
var globals = require('modules/globals');

var ImageZoom = {
  init: function() {
    var $imageZoomTrigger = $('.js-image-zoom');

    if ($imageZoomTrigger.length == 0) {
      return;
    }

    $imageZoomTrigger.magnificPopup({
    		type: 'image',
    		closeOnContentClick: true,
    		closeBtnInside: false,
    		fixedContentPos: true,
    		mainClass: 'mfp-with-zoom', // class to remove default margin from left and right side
    		image: {
    			verticalFit: true
    		},
    		zoom: {
    			enabled: true,
    			duration: 300 // don't forget to change the duration also in CSS
    		}
    	});
  },
};

module.exports = ImageZoom;
