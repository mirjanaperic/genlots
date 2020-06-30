"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		heroImg: $('.home-hero-image'),
		contentiLink: $('.contenti-link'),
		heroRight: $('.home-hero-right-inner')
	},
	
	changeOrder: function () {
		if (window.innerWidth <= 991) { 
			_this.$dom.heroImg.prependTo(_this.$dom.contentiLink);
		} else {
			_this.$dom.heroImg.appendTo(_this.$dom.heroRight);
		}
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		_this.changeOrder();
		$(window).on('resize', this.changeOrder);
	}
};