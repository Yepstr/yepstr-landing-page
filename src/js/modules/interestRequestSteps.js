var helpers = require('modules/helpers');
var parseHelper = require('modules/parseHelper');

var FormSteps = function() {

	var stepIndex = -1;
	var stepWrappers = Array.prototype.slice.call(document.querySelectorAll('.js-subscribe-step'));
	var steps = [];
	var interestRequestObj = {
		zipcode: null,
		email: null,
	};

	function init() {
		
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
		var prevStep = steps[stepIndex -1];
		var currentStep = steps[stepIndex];

		if(prevStep) {
			prevStep.el.classList.add('finished');
		}

		currentStep.el.classList.add('active');
		stepCallbacks[currentStep.callback]();
	}

	var stepCallbacks = {
		step0: function() {
			var form = document.getElementById('form-step-1');

			function onFormSubmit(e) {
				e.preventDefault();
				interestRequestObj.zipcode = helpers.serializeArray(form).zipcode;
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
			var form = document.getElementById('form-step-3');

			function onFormSubmit(e) {
				e.preventDefault();
				interestRequestObj.email = helpers.serializeArray(form).email;
				goToNextStep();
			}

			form.addEventListener('submit', onFormSubmit);
		},
		step3: function() {
			parseHelper.pushInterestRequest(interestRequestObj);
		},
	};

	init();
	
};

module.exports = FormSteps;