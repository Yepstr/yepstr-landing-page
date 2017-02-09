var $ = require('jquery');
var globals = require('modules/globals');

var CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH = 'http://localhost:3000/new-user-create-yep-search/start';

var openModal = function() {
  $.magnificPopup.open({
    items: {
      type: 'inline',
      src: $('<div class="create-task-modal" id="create-task-modal"><iframe src="' + CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH + '" frameborder="0"></iframe></div>')
    }
  });
}
var redirect = function() {
  window.location.href = CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH;
}

var CreateYepSearchSignupFlow = {
  init: function() {
    console.log('ininit');


    // init button click
    $('.js-modal-toggle').click(function() {
      var isMobile = $(window).width() < globals.breakpoints.medium;

      if (isMobile) {
        redirect();
      } else {
        openModal();
      }

      console.log('cliickity');
    });

    // init postman listening
  }
};

module.exports = CreateYepSearchSignupFlow;
