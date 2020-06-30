"use strict";

    
/**  
 * 1. Add [ "slick-carousel": "1.8.1" ], to package.json
 * 2. npm install
 * 3. Import slick scss file in assets/scss/plugins/slick.scss => @import "../../../node_modules/slick-carousel/slick/slick.scss";
 * 4. Add require('slick-carousel');
 * 5. Initialize slick
 * 
*/
require('slick-carousel');

module.exports = {
	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		tabContentSlider: $(".tabs-content-slider"),
		contentiSlider: $(".contenti-items-slider")
	},
	

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		this.$dom.tabContentSlider.on('afterChange', function(event, slickSlider, index){
			var $slider = $(event.target);

			$slider.prev().find('.tabs-nav-item').removeClass('active');
			$slider.prev().find('.tabs-nav-item').eq(index).addClass('active');

		});

		this.$dom.tabContentSlider.slick({
			slidesToScroll: 1,
			slidesToShow: 1,
			centerMode: true,
			centerPadding: 100,
			dots: true,
			arrows: true,
			adaptiveHeight: true,
			// appendArrows: '.tabs-content-nav-wrapper',
			prevArrow: '<span class="icon-angle icon-angle-left"></span>',
			nextArrow: '<span class="icon-angle icon-angle-right"></span>'
		});

		this.$dom.contentiSlider.slick({
			slidesToScroll: 3,
			slidesToShow: 3,
			// centerMode: true,
			// centerPadding: 100,
			// dots: true,
			// arrows: true,
			adaptiveHeight: true,
			// appendArrows: '.tabs-content-nav-wrapper',
			prevArrow: '<span class="icon-angle icon-angle-left icon-angle-left--content"></span>',
			nextArrow: '<span class="icon-angle icon-angle-right icon-angle-right--content"></span>',
			mobileFirst: false,
			
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					
				},
				//   {
				// 	breakpoint: 991,
				// 	settings: "unslick"
				// }
			]
		});
	}
};