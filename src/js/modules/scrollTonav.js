var $ = require('jquery');

var ScrollToNav = {
  init: function() {
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
    $wrapper.addClass('is-loaded');
  },
};

module.exports = ScrollToNav;
