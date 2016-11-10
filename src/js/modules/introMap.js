var $ = require('jquery');
var globals = require('modules/globals');

var IntroMap = {
  init: function() {
    var firstAnimationDelay = 2500,
      //type effect
      typeLettersDelay = 80,
      selectionDuration = 500,
      typeAnimationDelay = selectionDuration + 800;

    var $typeHeadline = $('.cd-headline');
    var $mapBackgroundWrapper = $('.js-map-backgrounds');
    var $mapBackgrounds = $mapBackgroundWrapper.find('.map-background');

    if ($typeHeadline.length == 0) {
      return;
    }

    var isMobile = $(window).width() < globals.breakpoints.medium;

    if(!isMobile){
      singleLetters($typeHeadline.find('b'));
      //initialise headline animation
      animateHeadline($typeHeadline);
    }

    function singleLetters($words) {
      $words.each(function() {
        var word = $(this),
          letters = word.text().split(''),
          selected = word.hasClass('is-visible');
        for (i in letters) {
          if (word.parents('.rotate-2').length > 0)
            letters[i] = '<em>' + letters[i] + '</em>';
          letters[i] = (selected)
            ? '<i class="in">' + letters[i] + '</i>'
            : '<i>' + letters[i] + '</i>';
        }
        var newLetters = letters.join('');
        word.html(newLetters).css('opacity', 1);
      });
    }

    function animateHeadline($headlines) {
      $headlines.each(function() {
        var headline = $(this);
        var $firstWord = headline.find('.is-visible').eq(0);
        //trigger animation
        setTimeout(function() {
          hideWord($firstWord)
        }, firstAnimationDelay);
      });
    }

    function hideWord($word) {
      var nextWord = takeNext($word);
      var parentSpan = $word.parent('.cd-words-wrapper');
      parentSpan.addClass('selected').removeClass('waiting');
      setTimeout(function() {
        parentSpan.removeClass('selected');
        $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
      }, selectionDuration);
      setTimeout(function() {
        showWord(nextWord, typeLettersDelay, nextWord.data('background'))
      }, typeAnimationDelay);
    }

    function showWord($word, $duration, backgroundClass) {
      var changeBackgroundDelay = ($word.text().length - 10) * $duration;
      var $targetBackground = $mapBackgroundWrapper.find(backgroundClass);
      setTimeout(function() {
        $mapBackgrounds.removeClass('is-visible');
        $targetBackground.addClass('is-visible');
      }, changeBackgroundDelay)
      showLetter($word.find('i').eq(0), $word, $duration);
      $word.addClass('is-visible').removeClass('is-hidden');
    }

    function showLetter($letter, $word, $duration) {
      $letter.addClass('in').removeClass('out');

      if (!$letter.is(':last-child')) {
        setTimeout(function() {
          showLetter($letter.next(), $word, $duration);
        }, $duration);
      } else {
        setTimeout(function() {
          hideWord($word)
        }, $word.data('animationdelay'))
      }
    }

    function takeNext($word) {
      return (!$word.is(':last-child'))
        ? $word.next()
        : $word.parent().children().eq(0);
    }

    function takePrev($word) {
      return (!$word.is(':first-child'))
        ? $word.prev()
        : $word.parent().children().last();
    }

  }
};

module.exports = IntroMap;
