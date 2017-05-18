<?php
$initParams = array(
	'items' => '3',
	'loop' => 'true',      // якщо кількість слайдів = 1, то loop => false, інакше скрипт падає
	'mouseDrag' => 'true',
	'touchDrag' => 'true',
	'autoplay' => 'false',
	'autoplayTimeout' => '5000',
	'nav' => 'false',
	'dots' => 'false'
);
?>

<div class="slider-personal">
	<div class="control prev"><span>prev</span></div>
	<div class="control next"><span>next</span></div>
	<div class="slider-dots"></div>

	<div class="owl-carousel" data-init-params="<?php $yamEgg->createSlider($initParams); ?>">
		<div class="item">
			<a href="#"><img src="<?=$yamEgg->img()?>images/sp-1.png" alt=""></a>
		</div>
		
		<div class="item">
			<a href="#"><img src="<?=$yamEgg->img()?>images/sp-2.png" alt=""></a>
		</div>
		
		<div class="item">
			<a href="#"><img src="<?=$yamEgg->img()?>images/sp-3.png" alt=""></a>
		</div>
	</div>
</div>
