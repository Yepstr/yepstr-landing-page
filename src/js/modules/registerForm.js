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

        msg.classList.add('show');
        form.classList.add('hide');

        parseHelper.pushRegisteredYep(helpers.serializeArray(form), function() {
            setTimeout(function() {
                if (formOverlay) {
                    self.closeModal();
                }
                form.reset();
                msg.classList.remove('show');
                form.classList.remove('hide');
            }, 5000);
        });
    };

    RegisterForm.prototype.setEventListeners = function() {
        if (closeModalBtn) {
            closeModalBtn.addEventListener('click', this.closeModal);
        }
        form.addEventListener('submit', this.submitForm);
    };

    return RegisterForm;

})();

module.exports = RegisterForm;
