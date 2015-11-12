var helpers = require('modules/helpers');
var parseHelper = require('modules/parseHelper');

var RegisterForm = (function() {
	var self;
	var formOverlay = document.querySelector('.js-register-form-overlay');
	var closeModalBtn = document.querySelector('.js-register-form-close-modal');
	var form = document.querySelector('.register-form');
	var msg = document.querySelector('.js-register-yep-msg');

	function RegisterForm() {
		self = this;
		this.setEventListeners();
	}

	RegisterForm.prototype.openModal = function() {
		formOverlay.classList.add('show');
		document.body.classList.add('no-scroll');
	};

	RegisterForm.prototype.closeModal = function() {
		formOverlay.classList.remove('show');
		document.body.classList.remove('no-scroll');
	};

	RegisterForm.prototype.submitForm = function(e) {
		e.preventDefault();
		parseHelper.pushRegisteredYep(helpers.serializeArray(form), function(){
			msg.classList.add('show');
			setTimeout(function() {
				self.closeModal();
				msg.classList.add('show');
			}, 3000);
		});
	};

	RegisterForm.prototype.setEventListeners = function() {
		closeModalBtn.addEventListener('click', this.closeModal);
		form.addEventListener('submit', this.submitForm);
	};

	return RegisterForm;
	
})();

module.exports = RegisterForm;