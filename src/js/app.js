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
    
    init: function() {
        parseHelper.initialize();
        interestRequestSteps();

        app.setEventListeners();
        app.setUpOkayNav();
        app.setUpMagnificPopupVideo();
    },
    
    setEventListeners: function() {

        if(registerForm){
            var _registerForm = new registerForm();    
        }
        
        
        if(app.scrollToSectionTriggers){
            app.scrollToSectionTriggers.forEach(function(trigger) {
                trigger.addEventListener('click', app.scrollToTarget);
            });    
        }        
        
        if(app.openRegisterBtn){
            app.openRegisterBtn.addEventListener('click', _registerForm.openModal);    
        }
    },
    
    scrollToTarget: function(e) {
        console.log(e);
    	var clicked = e.currentTarget;
    	var target = clicked.getAttribute('data-target');
    	var targetEl = document.getElementById(target);
    	var offset = targetEl.offsetTop;

        $('html, body').animate({ scrollTop: offset + 'px' }, 700, 'swing');
    },
    setUpOkayNav: function(e) {
        var $wrapper = $('.js-main-nav-wrapper');
        if ( $wrapper.length == 0 ) return;
        var beforeOpen = function(){
            $wrapper.addClass('is-inverted');
        }

        var beforeClose = function(){
            $wrapper.removeClass('is-inverted');
        }

        var $navMain = $wrapper.find('.js-nav-main').okayNav({
            parent : '', // will call nav's parent() by default
            toggle_icon_class : 'okayNav__menu-toggle',
            toggle_icon_content: '<span /><span /><span />',
            align_right: true, // If false, the menu and the kebab icon will be on the left
            swipe_enabled: false, // If true, you'll be able to swipe left/right to open the navigation
            threshold: 50, // Nav will auto open/close if swiped >= this many percent
            beforeOpen : beforeOpen, // Will trigger before the nav gets opened
            afterOpen : function() {}, // Will trigger after the nav gets opened
            beforeClose : beforeClose, // Will trigger before the nav gets closed
            afterClose : function() {}, // Will trigger after the nav gets closed
            itemHidden: function() {}, // Will trigger after an item moves to the hidden navigation
            itemDisplayed: function() {}, // Will trigger after an item moves to the visible navigation
        });
    },
    setUpMagnificPopupVideo: function(e) {
        var $popupVideoButton = $('.js-popup-video-button');
        if ( $popupVideoButton.length == 0 ) return;
        var $backgroundVideo = $('.js-full-screen-video');
        var beforeOpen = function(){
            if($backgroundVideo.length !== 0){
                $backgroundVideo[0].pause();
            }
        };
        var beforeClose = function(){
            if($backgroundVideo.length !== 0){
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

app.init();
