'use strict';

var $ = require('jquery');
var helpers = require('modules/helpers');
var interestRequestSteps = require('modules/interestRequestSteps');
var registerForm = require('modules/registerForm');
var parseHelper = require('modules/parseHelper');
var app = require('magnific-popup');

require('modules/okayNav.js');
require('modules/magnificPopup.js');

var app = {
  scrollToSectionTriggers: Array.prototype.slice.call(document.querySelectorAll('.js-scroll-to-section')),
  openRegisterBtn: document.querySelector('.js-open-register-btn'),
  breakpoints: {
    xsmall: 640,
    small: 800,
    medium: 1100,
    large: 1400,
  },

  init: function() {
    parseHelper.initialize();
    interestRequestSteps();

    app.setEventListeners();
    app.setUpOkayNav();
    app.setUpMagnificPopupVideo();
    app.makeScrollToNav();
    app.setUpGoogleAnalyticsEventTracking();
  },

  setEventListeners: function() {

    if (registerForm) {
      var _registerForm = new registerForm();
    }


    if (app.scrollToSectionTriggers) {
      app.scrollToSectionTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', app.scrollToTarget);
      });
    }

    if (app.openRegisterBtn) {
      app.openRegisterBtn.addEventListener('click', _registerForm.openModal);
    }
  },

  scrollToTarget: function(e) {
    var clicked = e.currentTarget;
    var target = clicked.getAttribute('data-target');
    var targetEl = document.getElementById(target);
    var offset = targetEl.offsetTop;

    $('html, body').animate({ scrollTop: offset + 'px' }, 700, 'swing');
  },

  makeScrollToNav: function(e) {
    var $wrapper = $('.js-scroll-to-nav');
    var $scrollToNavContent = $('.js-scroll-to-nav-content');
    if ($wrapper.length == 0 || $scrollToNavContent.length == 0) return;

    var $list = $wrapper.find('.js-scroll-to-nav-list');
    var $item = $wrapper.find('.js-scroll-to-nav-item').remove().clone();
    var $headlines = $scrollToNavContent.find('h1, h2, h3');

    var scrollToTarget = function() {
      var $t = $(this);
      var target = $t.data('target');
      var $target = $('#' + target);

      var offset = $target.offset().top - 100; // Adjusting the offset to make room for the menu
      $('html, body').animate({ scrollTop: offset + 'px' }, 700, 'swing');
    };

    $headlines.each(function(index, el) {
      var $el = $(el);
      var scrollToKey = "scroll-to-" + index;
      var $itemClone = $item.clone();

      $el.attr('id', scrollToKey);
      $itemClone
        .text($(el).text())
        .data('target', scrollToKey)
        .on('click', scrollToTarget)
        .appendTo($list);
    });
    $wrapper.addClass('is-loaded')
  },

  setUpOkayNav: function(e) {
    var $wrapper = $('.js-main-nav-wrapper');
    if ($wrapper.length == 0) return;

    var $navMain = $wrapper.find('.js-nav-main');

    // Set active page in menu
    // var $activePage = $navMain.data('active-page');
    // var $navMainItems = $wrapper.find('li');
    // $navMainItems.each(function(index, el) {
    //   if ($(el).data('active-key') == $activePage) {
    //     $(el).addClass('is-active');
    //   }
    // });

    var beforeOpen = function() {
      $wrapper.addClass('is-inverted');
    }

    var beforeClose = function() {
      $wrapper.removeClass('is-inverted');
    }

    $navMain.okayNav({
      parent: '', // will call nav's parent() by default
      toggle_icon_class: 'okayNav__menu-toggle',
      toggle_icon_content: '<span /><span /><span />',
      align_right: true, // If false, the menu and the kebab icon will be on the left
      swipe_enabled: false, // If true, you'll be able to swipe left/right to open the navigation
      threshold: 50, // Nav will auto open/close if swiped >= this many percent
      beforeOpen: beforeOpen, // Will trigger before the nav gets opened
      afterOpen: function() {}, // Will trigger after the nav gets opened
      beforeClose: beforeClose, // Will trigger before the nav gets closed
      afterClose: function() {}, // Will trigger after the nav gets closed
      itemHidden: function() {}, // Will trigger after an item moves to the hidden navigation
      itemDisplayed: function() {}, // Will trigger after an item moves to the visible navigation
    });

    //Fix jumping menu on mobile
    $window.on('load.okayNav', function(e) {
      $wrapper.addClass('is-loaded');
    });
  },
  setUpMagnificPopupVideo: function(e) {
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
  setUpGoogleAnalyticsEventTracking: function() {

    $('.ga-play-video').on('click', function(e) {
      ga('send', 'event', 'Video', 'Play', document.title);
    });

    $('.ga-outbound-link').on('click', function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      ga('send', 'event', 'Outbound link', 'click', href, {
        'transport': 'beacon',
        'hitCallback': function() {
          document.location = href;
        }
      });
    });

    $('.ga-contact-footer-link').on('click', function(e) {
      var type = $(this).data('type');
      ga('send', 'event', 'Contact footer link', 'click', type);
    });

    $('.ga-scroll-to-link').on('click', function(e) {
      var scrollToTarget = $(this).data('target');
      ga('send', 'event', 'Scroll to link', 'click', scrollToTarget);
    });

    $('.ga-faq-link').on('click', function(e) {
      var linkTitle = $(this).text();
      ga('send', 'event', 'FAQ link', 'click', linkTitle);
    });
  },
};

app.init();
