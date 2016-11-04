var $ = require('jquery');

var ActivePageHighlight = {
  init: function() {
    var pageId = $('body').data('page');
    var isActiveClass = 'is-active';
    var $highlightEls = $('.js-highlight');
    if($highlightEls.length == 0 || !pageId){
        return;
    }

    $highlightEls.each(function(){

      var $t = $(this);
      var pageKey = $t.data('key');
      console.log(pageKey)
      console.log(pageId)
      if(pageKey === pageId){
        $t.addClass(isActiveClass);
      }
    });
  },
};

module.exports = ActivePageHighlight;
