"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
        faqQuestion: $('.faq-question'),
        faqAnswer: $('.faq-answer')
    },

    classes: {
        open: 'open',
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        
        _this.bind();

    },

    bind: function() {

        _this.$dom.faqQuestion.on( 'click', _this.openClose);

    },

    openClose: function() {

        _this.$dom.faqQuestion.next( _this.$dom.faqAnswer ).slideUp();
        _this.$dom.faqQuestion.not(this).removeClass( _this.classes.open );
        
        if( $(this).hasClass( _this.classes.open )) {

            $(this).next( _this.$dom.faqAnswer ).slideUp();
            $(this).removeClass( _this.classes.open );

        } else {

            $(this).addClass( _this.classes.open );
            $(this).next( _this.$dom.faqAnswer ).slideDown();

        }

    },

};