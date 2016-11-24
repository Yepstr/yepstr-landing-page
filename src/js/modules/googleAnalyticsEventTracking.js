var $ = require('jquery');

var GoogleAnalyticsEventTracking = {
  init: function() {
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

module.exports = GoogleAnalyticsEventTracking;
