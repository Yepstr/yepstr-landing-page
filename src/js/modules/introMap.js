var $ = require('jquery');

var IntroMap = {
  init: function() {
    var animationDelay = 2500,
      //type effect
      typeLettersDelay = 100,
      selectionDuration = 500,
      typeAnimationDelay = selectionDuration + 800;

    var $typeHeadline = $('.cd-headline');
    var $introHeaderMap = $('.js-intro-header--map-animation');

    if ($typeHeadline.length == 0) {
      return;
    }

    singleLetters($('.cd-headline.letters').find('b'));
    //initialise headline animation
    animateHeadline($('.cd-headline'));

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
      var duration = animationDelay;

      $headlines.each(function() {
        var headline = $(this);
        //trigger animation
        setTimeout(function() {
          hideWord(headline.find('.is-visible').eq(0))
        }, duration);
      });
    }

    function hideWord($word) {
      var nextWord = takeNext($word);
      if ($word.parents('.cd-headline').hasClass('type')) {
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
    }

    function showWord($word, $duration, background) {
      $introHeaderMap.css('background-image', 'url(' + background + ')');
      if ($word.parents('.cd-headline').hasClass('type')) {
        showLetter($word.find('i').eq(0), $word, false, $duration);
        $word.addClass('is-visible').removeClass('is-hidden');
      }
    }

    function showLetter($letter, $word, $bool, $duration) {
      $letter.addClass('in').removeClass('out');

      if (!$letter.is(':last-child')) {
        setTimeout(function() {
          showLetter($letter.next(), $word, $bool, $duration);
        }, $duration);
      } else {
        if ($word.parents('.cd-headline').hasClass('type')) {
          setTimeout(function() {
            $word.parents('.cd-words-wrapper').addClass('waiting');
          }, 200);
        }
        if (!$bool) {
          setTimeout(function() {
            hideWord($word)
          }, animationDelay)
        }
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
