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
};

module.exports = Helpers;
