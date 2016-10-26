var $ = require('jquery');

var ScrollToTarget = {
  init: function() {
    var $scrollToSectionTriggers = $('.js-scroll-to-section');
    if ($scrollToSectionTriggers.length == 0) return;

    $scrollToSectionTriggers.on('click', function(){
      var $triggerLink = $(this);
      scrollToTarget($triggerLink);
    });

    var scrollToTarget = function($triggerLink) {
      var target = $triggerLink.data('target');
      var targetEl = document.getElementById(target);
      var offset = targetEl.offsetTop;
      $('html, body').animate({ scrollTop: offset + 'px' }, 700, 'swing');
    };
  },
};

module.exports = ScrollToTarget;
