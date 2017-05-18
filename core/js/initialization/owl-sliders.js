$(document).ready(function() {
	var container, params;
	/////////////////////////////////////////////////////////////////////////////
	// default slider init

	if($('.slider-default').length) {
		container = '.slider-default';
		params = getParams($(container + ' .owl-carousel'));
		owl_INIT(container, params);
	}

	if($('.aboutUsSlider').length) {
		container = '.aboutUsSlider';
		params = getParams($(container + ' .owl-carousel'));
		params = $.extend({
			responsive: {
				0: {items: 1},
				800: {items: 2},
				1025: {items: 3}
			}
		}, params);
		owl_INIT(container, params);
	}

	if($('.slider-funcSH').length) {
		container = '.slider-funcSH';
		params = getParams($(container + ' .owl-carousel'));
		params = $.extend({
			responsive: {
				0: {items: 1},
				1025: {items: 3}
			},
			onTranslate: function() {
				$(".houses").addClass("opacity");
			},
			onTranslated: function (){
				rendFuncSmartHouse();
			},
			callback_Init: function() {
				rendFuncSmartHouse();
				addImg();
			}
		}, params);
		owl_INIT(container, params);
	}




	/////////////////////////////////////////////////////////////////////////////
	// product slider
	var createProductOwl = function() {
		if($('.product-slider .on-page-slider').length) {
			container = '.product-slider .on-page-slider';
			params = getParams($(container + ' .owl-carousel'));

			params = $.extend({
				responsive: {
					0: {items: 1},
					260: {items: 2},
					320: {items: 3}
				}
			}, params);

			owl_INIT(container, params);
		}
	};

	RegisterEvent("createProductOwl", createProductOwl);

	DO("createProductOwl");
	/////////////////////////////////////////////////////////////////////////////
});
