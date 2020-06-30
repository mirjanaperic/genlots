// "use strict";
// var Global = require('./global');
// var _this = module.exports = {
// 	/*-------------------------------------------------------------------------------
// 		# Cache dom and strings
// 	-------------------------------------------------------------------------------*/
// 	$dom: {
//         stickyElement: $('.home-hero-image'),
//         stickyParent: $('.home-hero-wrapper'),
// 	},
// 	vars: {
// 		offset: 120
// 	},
// 	/*-------------------------------------------------------------------------------
// 		# Initialize
// 	-------------------------------------------------------------------------------*/
// 	init: function () {
		
// 		if (_this && Global.$dom.window.width() >= 1200 ) {
// 			_this.stickyfyElements();
// 			Global.$dom.window.on('scroll', _this.stickyfyElements);
// 			Global.$dom.window.on('resize', _this.stickyfyElements);
// 		}
// ​
// 	},
// 	stickyfyElements: function () {
// 		// offset based sticky
// 		_this.$dom.stickyElement.each(function () {
// 			var checkBottomBorder = _this.$dom.stickyParent.offset().top + _this.$dom.stickyParent.outerHeight() < (Global.$dom.window.scrollTop() + $(this).outerHeight() + _this.vars.offset);
// 			var checkTopBorder = _this.$dom.stickyParent.offset().top < (Global.$dom.window.scrollTop() + _this.vars.offset);
// 			if (checkTopBorder && !checkBottomBorder) {
// 				$(this).addClass('fixed').css({
// 					top: _this.vars.offset,
// 				});
// 			} else if (checkBottomBorder) {
// 				_this.$dom.stickyParent.addClass('sticky-bottom');
// 				$(this).removeClass('fixed').css({
// 					top: 'inherit',
// 				});
// 			} else {
// 				_this.$dom.stickyParent.removeClass('sticky-bottom');
// 				$(this).removeClass('fixed').css({
// 					top: 'inherit',
// 				});
// 			}
// 		});
// 	},
// };
