'use strict';

var $ = require('jquery');

require('vendor/magnificPopup.js');

var scrollToTarget = require('modules/scrollToTarget');
var scrollToNav = require('modules/scrollToNav');
var googleAnalyticsEventTracking = require('modules/googleAnalyticsEventTracking');
var popupVideo = require('modules/popupVideo');

var app = {
  init: function() {
    googleAnalyticsEventTracking.init();
    scrollToNav.init();
    scrollToTarget.init();
    popupVideo.init();
  },
};

$(document).ready(function() {
    app.init();
});
