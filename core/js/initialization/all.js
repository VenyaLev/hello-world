$(document).ready(function() {

	//////////////////////////////////////////////////////
	// ranges
	var dataRange = document.querySelectorAll("[data-range]");
	if(dataRange.length && CheckFeature("yamasters-range")) {
		DO("yamasters-range:create");

		$("body").on("ajaxResponse", function() {
			DO("yamasters-range:refresh");
		});
	}

	//////////////////////////////////////////////////////
	// yamasters counter
	var dataYamCounter = document.querySelectorAll("[data-yam-counter]");
	if(dataYamCounter.length && CheckFeature("yamasters-counter")) {
		DO("yamasters-counter:create");

		$("body").on("ajaxResponse", function() {
			DO("yamasters-counter:refresh");
		});
	}

	//////////////////////////////////////////////////////
	// yamasters select

	var dataYamSelect = document.querySelectorAll("[data-yam-select]");
	if(dataYamSelect.length && CheckFeature("yamasters-select")) {
		DO("yamasters-select:create");

		$("body").on("ajaxResponse", function() {
			DO("yamasters-select:refresh");
		});
	}

	//////////////////////////////////////////////////////
	// yam validator

	var dataRegular = $("[data-yam-validator]");
	if(dataRegular.length && CheckFeature("yamasters-validator")) {
		DO("yamasters-validator:create");

		$("body").on("ajaxResponse", function() {
			DO("yamasters-validator:refresh");
		});
	}

	///////////////////////////////////////////////////////
	// yam tabulator
	var dataYamTabulator = document.querySelectorAll("[data-yam-tabulator]");
	if(dataYamTabulator.length && CheckFeature("yamasters-tabulator")) {
		DO("yamasters-tabulator:create");

		$("body").on("ajaxResponse", function() {
			DO("yamasters-tabulator:refresh");
		});
	}

	///////////////////////////////////////////////////////
	// yam tabulator
	var dataYamRating = document.querySelectorAll("[data-yam-rating]");
	if(dataYamRating.length && CheckFeature("yamasters-rating")) {
		DO("yamasters-rating:create");

		$("body").on("ajaxResponse", function() {
			DO("yamasters-rating:refresh");
		});
	}

	////////////////////////////////////////////////////////
	// yam popup system

	var dataOpenWindow = $("[data-open-window]");
	if(dataOpenWindow.length) {
		dataOpenWindow.click(function(e) {
			e.preventDefault();
			yamPopup($(this).data("open-window"), "", e);
		});
	}

	/////////////////////////////////////////////////////////
	// fancybox

	var classFancybox = $(".fancybox");
	if(classFancybox.length) {
			classFancybox.fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		}); 
	}

});


////////////////////////////////////////////////////////////////////////////////
/// to top arrow
var totop = function() {
	var top_show = 200;
	var delay = 300;

	if ($(this).scrollTop() > top_show) $('.totop').fadeIn();
	else $('.totop').fadeOut();

	$(window).scroll(function() {
		if ($(this).scrollTop() > top_show) $('.totop').fadeIn();
		else $('.totop').fadeOut();
	});

	$('.totop').click(function() {
		$('body, html').animate({
			scrollTop: 0
		}, delay);
		return false;
	});
};
totop();

////////////////////////////////////////////////////////////////////////////////
/// img async
(function() {
	var Images = document.querySelectorAll("img[data-yam-img-async]");
	for(var i = 0; i < Images.length; i++) {
		var src = Images[i].dataset.yamImgAsync;
		Images[i].setAttribute("src", src);
	}
})();
