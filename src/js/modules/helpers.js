var $ = require('jquery');

var Helpers = {
  cloneObject: function(o) {
    var pds = {};
    Object.getOwnPropertyNames(o).forEach(function _eachName(name) {
      pds[name] = Object.getOwnPropertyDescriptor(o, name);
    });

    return Object.create(Object.getPrototypeOf(o), pds);
  },
  serializeArray: function(form) {
    var data = {};
    var $form = $(form);
    $.each($form.serializeArray(), function(_, kv) {
      data[kv.name] = kv.value;
    });

    return data;
  },
  googleAnalytics: {
    playVideo: function(pageUrl) { // url: current page url
      this.gaSendEvent('Video', 'Play', pageUrl, '');
    },
    outboundLinks: function(targetUrl) { // label: link label
      this.gaSendEvent('Outbound Link', 'click', targetUrl, '');
    },
    contact: function(type) { // type: mail/phone/etc
      this.gaSendEvent('Contact footer link', 'click', type, '');
    },
    scrollToLink: function(label) { // label: link label
      this.gaSendEvent('Scroll to link', 'click', label, '');
    },
    faqLink: function(label) { // label: link label
      this.gaSendEvent('FAQ link', 'click', label, '');
    },
    // Private functions
    gaSendEvent: function(eventCategory, eventAction, eventLabel, eventValue) {
      ga('send', 'event', eventCategory, eventAction, eventLabel, eventValue);
    },
  },
};

module.exports = Helpers;
