"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		tabNav: $('.tabs-nav-item'),
		tabContent: $('.tabs-content-item'),
    },

    vars: {
	},

	changeTab: function () {
		var _thisEl = $(this); 
		var slideIndex = parseInt( _thisEl.attr('data-id') );
		
		var $slider = $(this).parents('.tabs-nav').next();

		$slider.slick('slickGoTo', slideIndex - 1);
		
		_thisEl.siblings('.tabs-nav-item').removeClass('active');
		_thisEl.addClass('active');
    },

	bind: function () {
		_this.$dom.tabNav.on('click', _this.changeTab);
		
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		_this.bind();
	}

};