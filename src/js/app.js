'use strict';

var $ = require('jquery');

require('vendor/magnificPopup.js');

var scrollToTarget = require('modules/scrollToTarget');
var scrollToNav = require('modules/scrollToNav');
var createYepSearchSignupFlow = require('modules/createYepSearchSignupFlow');
var popupVideo = require('modules/popupVideo');
var activePageHighlight = require('modules/activePageHighlight');
var imageZoom = require('modules/imageZoom');
var introMap = require('modules/introMap');


var app = {
  init: function() {
    scrollToNav.init();
    scrollToTarget.init();
    popupVideo.init();
    activePageHighlight.init();
    imageZoom.init();
    createYepSearchSignupFlow.init();
  },
  load: function() {
    introMap.init();
  },
};

$( document ).ready(function() {
    app.init();
});

$( window ).load(function() {
    app.load();
});
