'use strict';

var $ = require('jquery');
var helpers = require('modules/helpers');
var interestRequestSteps = require('modules/interestRequestSteps');
var registerForm = require('modules/registerForm');
var parseHelper = require('modules/parseHelper');

var app = {
	scrollToSectionTriggers: Array.prototype.slice.call(document.querySelectorAll('.js-scroll-to-section')),
    openRegisterBtn: document.querySelector('.js-open-register-btn'),
    
    init: function() {
        parseHelper.initialize();
        interestRequestSteps();

        app.setEventListeners();
    },
    
    setEventListeners: function() {

        var _registerForm = new registerForm();
        
        app.scrollToSectionTriggers.forEach(function(trigger) {
        	trigger.addEventListener('click', app.scrollToTarget);
        });

        app.openRegisterBtn.addEventListener('click', _registerForm.openModal);

    },
    
    scrollToTarget: function(e) {
    	var clicked = e.currentTarget;
    	var target = clicked.getAttribute('data-target');
    	var targetEl = document.getElementById(target);
    	var offset = targetEl.offsetTop;

        $('html, body').animate({ scrollTop: offset + 'px' }, 700, 'swing');
    },
};

app.init();
