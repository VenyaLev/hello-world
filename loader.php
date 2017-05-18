<!-- Touchscreen detect -->
<script>
function isTouchDevice() {
	return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
}
window.isTouhcDevice = isTouchDevice();

function loadScript(src) {
	var script = document.createElement("script");
	script.src = src;
	script.async = false; // чтобы гарантировать порядок
	document.getElementById("loader").appendChild(script);
}

function loadStyle(href) {
	var link = document.createElement("link");
	link.rel = "stylesheet";
	link.href = href;
	document.getElementById("loader").appendChild(link);
}
</script>

<!-- Yamasters async -->
<script>

// load scripts
document.addEventListener("DOMContentLoaded", function(e) {

	// Load styles

	loadStyle("<?=$yamEgg->img();?>fonts/pfdin-text-cond-pro.css");

	loadStyle("<?=$yamEgg->img();?>fonts/PFDinTextCompProLight_0.css");

	loadStyle("<?=$yamEgg->img();?>fonts/font-awesome-4.4.0/font-awesome.min.css");
	//		loadStyle("<?//=$yamEgg->img();?>//fonts/4.5.0/font-awesome.min.css");

	loadStyle("<?=$yamEgg->img();?>scripts/datepicker/jquery-ui.css");

	// regulars
	loadScript("<?=$yamEgg->img();?>includes/components/js-components/validator-patterns.js");

	// yamasters polyfills
	loadScript("<?=yamEgg::getCDNPath();?>javascript/yamasters-polyfills/script.js");

	// load Jquery library
	loadScript("<?=yamEgg::getCDNPath();?>core/js/jquery.min.js");

	// load Jquery Mobile library, if touch device was detected
	if(window.isTouhcDevice)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/jquery.mobile/jquery.mobile.custom.min.js");

	// load module "Get params"
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-get-params/script.js");

	// load module "Yamasters popup"
	loadScript("<?=yamEgg::getCDNPath();?>core/js/plugins/yam-popup/script.js");

	// load module "Yamasters language"
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-language/script.js");

	// load module "Yamasters multiple range"
	if(document.querySelectorAll(".multipleRange").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-multiple-range/script.js");

	// load module "Yamasters to top"
	if(document.querySelectorAll(".totop").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-totop/script.js");

	// load module "Yamasters tabulator"
	if(document.querySelectorAll("[data-yam-tabulator]").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-tabulator/script.js");

	// load module "Yamasters counter"
	if(document.querySelectorAll("[data-yam-counter]").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-counter/script.js");

	// load module "Yamasters select"
	if(document.querySelectorAll("[data-yam-select]").length)
	loadScript("<?=yamEgg::getCDNPath()?>javascript/yamasters-select/script.js");
	// loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-select/script.js");

	// load module "Yamasters validator"
	if(document.querySelectorAll("[data-yam-validator]").length)
	// loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-validator/script.js");
	loadScript("<?=yamEgg::getCDNPath()?>javascript/yamasters-validator/script.js");
//	loadScript("<?//=$yamEgg->img();?>//scripts/validator.js");

	// load module "Yamasters rating"
	if(document.querySelectorAll("[data-yam-rating]").length)
	loadScript("<?=yamEgg::getCDNPath()?>javascript/yamasters-rating/script.js");

	/*-------------------------------- Third-side modules --------------------------------------*/

	// load module "Lazy load"
	if(document.querySelectorAll(".lazy").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/jquery.lazyload/jquery.lazyload.min.js");

	// load module "yamasters-timer"
	if(document.querySelectorAll(".blockDate").length)
	loadScript("<?=yamEgg::getCDNPath()?>javascript/yamasters-timer/script.js");


	// load module "Product slider"
	if(document.querySelectorAll(".product-slider").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-product-slider/script.js");

	// load module "Owl carousel"
	if(document.querySelectorAll(".owl-carousel").length) {
		loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/owl.carousel-2/owl.carousel.js");
		loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-owl-init-module/script.js");
		loadScript("<?=$yamEgg->img();?>core/js/initialization/owl-sliders.js");
	}

	// load module "Superfish" and "Yamasters top-menu position fix"
	if(document.querySelectorAll("#yam-menu-top").length || document.querySelectorAll("#yam-menu-bottom").length) {
		loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/superfish/superfish.js");
		loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/yam-menu-position-fix/script.js");
		loadScript("<?=$yamEgg->img();?>core/js/initialization/menu.js");
	}

	// load module "Fancy box"
	if(document.querySelectorAll(".fancybox").length)
	loadScript("<?=yamEgg::getCDNPath()?>core/js/plugins/fancybox-2.1.5/jquery.fancybox.min.js");

	// load initialization script for most modules
	loadScript("<?=$yamEgg->img();?>core/js/initialization/all.js");

	// load Google Maps
	if(document.querySelectorAll("#map").length) {
		loadScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyDflYRggQMdqUQ3EUvQQNRsM4oYDIlxeqo");
		loadScript("<?=$yamEgg->img();?>scripts/markerclusterer.js");
		loadScript("<?=$yamEgg->img();?>scripts/map.js");
	}

	loadScript("<?=$yamEgg->img();?>scripts/datepicker/jquery-ui.min.js");

	loadScript("<?=$yamEgg->img();?>scripts/mask.js");

	// load developers scripts
	loadScript("<?=$yamEgg->img();?>scripts/developers/vtlk.js");
	loadScript("<?=$yamEgg->img();?>scripts/developers/airman.js");
	loadScript("<?=$yamEgg->img();?>scripts/developers/kristi.js");



	// load "application.js"
	loadScript("<?=$yamEgg->img();?>scripts/application.js");
});
</script>

<div id="loader"></div>
