var Parse = require('parse');

var ParseHelper = {
	settings: {
		appID: '8nQeYS0tcmOJLo9BTHMW29EEgF6o9uOsyNDGSvBC',
		jsKey: '0Tk6MYCN2CZc3GFm0MBMvMHZOVHyvnoqg5xOPpzR',
	},
	initialize: function() {
		var self = this;
		Parse.initialize(self.settings.appID, self.settings.jsKey);
	},
	save: function(parseObj, cb) {
		parseObj.save(null, {
		  success: function() {
		  	if (cb) {
		  		cb();
		  	}
		  },
		  error: function(parseObj, error) {
		    console.log('Failed to create new object, with error code: ' + error.message);
		  }
		});
	},
	pushInterestRequest: function(data, cb) {
		var InterestRequest = Parse.Object.extend('interestRequest');
		var interestRequest = new InterestRequest();

		interestRequest.set(data);
		this.save(interestRequest, cb);
				
	},
	pushRegisteredYep: function(data, cb) {
		var RegisteredYep = Parse.Object.extend('registeredYeps');
		var registeredYep = new RegisteredYep();

		registeredYep.set(data);
		this.save(registeredYep, cb);
	},
};

module.exports = ParseHelper;
