var $ = require('jquery');
var helpers = require('modules/helpers');
var parseHelper = require('modules/parseHelper');

var FormSteps = function() {

  var stepIndex = -1;
  var stepWrappers = Array.prototype.slice.call(document.querySelectorAll('.js-subscribe-step'));
  var steps = [];
  var interestRequestObj = {
    zipcode: null,
    sthlmzipcode: null,
    email: null,
    role: null,
  };
  var stockholmZipCodeMin = 100;
  var stockholmZipCodeMax = 175;

  function init() {
    if (stepWrappers.length == 0) return;
    stepWrappers.forEach(function(step, i) {
      steps[i] = {
        el: step,
        callback: 'step' + i,
      };
    });

    goToNextStep();
  }

  function goToNextStep() {
    stepIndex++;
    var prevStep = steps[stepIndex - 1];
    var currentStep = steps[stepIndex];

    if (prevStep) {
      prevStep.el.classList.add('finished');
    }

    currentStep.el.classList.add('active');
    stepCallbacks[currentStep.callback]();
  }

  function checkIfZipCodeIsInOpenArea(zipcode) {
  	var firstThree = parseInt(zipcode.substring(0,3), 10);
    return (stockholmZipCodeMin <= firstThree) && (firstThree <= stockholmZipCodeMax);
  }

  var stepCallbacks = {
    step0: function() {
      var form = document.getElementById('form-step-1');

      function onFormSubmit(e) {
        e.preventDefault();
        interestRequestObj.zipcode = helpers.serializeArray(form).zipcode;
        if (checkIfZipCodeIsInOpenArea(interestRequestObj.zipcode)) {
	      	$('.js-not-found-zipcode').hide();
	      	$('.js-found-zipcode').show();
	      	interestRequestObj.sthlmzipcode = true;
	      }
        goToNextStep();
      }
      
      form.addEventListener('submit', onFormSubmit);
    },
    step1: function() {

      setTimeout(function() {
        goToNextStep();
      }, 3000);
    },
    step2: function() {
      var $form = $('#form-step-3');
      var form = document.getElementById('form-step-3');
      var $subscribeEmailInput = $form.find('#subscribe-email-input');
      var $errorMsg = $form.find('.js-email-error-msg');

      function onFormSubmit(role) {
      	interestRequestObj.role = role;
        interestRequestObj.email = helpers.serializeArray(form).email;
        goToNextStep();
      }

      $form.find('.btn').on('click', function(e) {
      	e.preventDefault();

        if($subscribeEmailInput.val() === '' || !$subscribeEmailInput[0].checkValidity()){
          $errorMsg.show();
          return false;
        }else{
          $errorMsg.hide();
        }
        
      	var role = $(this).data('role')
      	onFormSubmit(role);
      });

      $form.bind('keypress', function(e){
        if ( e.keyCode == 13 ) {
          return false;
        }
      });
    },
    step3: function() {
      parseHelper.pushInterestRequest(interestRequestObj);
    },
  };

  init();

};

module.exports = FormSteps;
