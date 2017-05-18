<?php
$initParams = array(
	'items' => '1',
	'loop' => 'true',
	'mouseDrag' => 'false',
	'touchDrag' => 'false',
	'autoplay' => 'true',
	'nav' => 'false',
	'dots' => 'true'
);
?>

<div class="slider-default">
	<div class="control prev"><span>prev</span></div>
	<div class="control next"><span>next</span></div>
	<div class="slider-dots"></div>

	<div class="owl-carousel" data-init-params="<?php $yamEgg->createSlider($initParams); ?>">
		<div class="item" style="background-image: url('<?=yamEgg::getCDNPath($dev)?>images/sliders/slider-photo-1.jpg');"></div>
		<div class="item" style="background-image: url('<?=yamEgg::getCDNPath($dev)?>images/sliders/slider-photo-2.jpg');"></div>
		<div class="item" style="background-image: url('<?=yamEgg::getCDNPath($dev)?>images/sliders/slider-photo-3.jpg');"></div>
	</div>
</div>
