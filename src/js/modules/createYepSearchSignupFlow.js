var $ = require('jquery');
var globals = require('modules/globals');

var CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH = 'https://app.yepstr.com/new-user-create-yep-search/start';
// var CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH = 'https://yepstr-christmas.herokuapp.com/new-user-create-yep-search/start';

var openModal = function() {
  $.magnificPopup.open({
    items: {
      type: 'inline',
      src: $('<div class="create-task-modal" id="create-task-modal"><iframe src="' + CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH + '" frameborder="0"></iframe></div>')
    },
    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    showCloseBtn: true,
    closeOnBgClick: false,

    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });
}
var redirect = function() {
  window.location.href = CREATE_YEP_SEARCH_SIGNUP_FLOW_PATH;
};

var TRUSTED_POSTMAN_ORIGINS = [
  'http://localhost:3000',
  'http://localhost:3003',
  'https://app.yepstr.com',
  'https://yepstr-christmas.herokuapp.com'
];
var receivedPostMessage = function(event) {
  if (TRUSTED_POSTMAN_ORIGINS.indexOf(event.origin) !== -1) {
    if (event.data && event.data.redirectLocation) {
      window.location.href = event.origin + event.data.redirectLocation;
    }
  }
};

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
    });
    // init postman listening
    window.addEventListener('message', receivedPostMessage, false);
  }
};

module.exports = CreateYepSearchSignupFlow;
