<div class="product-slider">

	<?php
		$initParams = array(
			'container' => '.on-page-slider',
			'items' => '3',
			'loop' => 'false',
			'margin' => '22',
			'mouseDrag' => 'true',
			'touchDrag' => 'true',
			'autoplay' => 'false',
			'autoplayTimeout' => '3000',
			'autoplaySpeed' => '500',
			'nav' => 'false',
			'dots' => 'false',
			'product_slider' => 'true');
	?>

	<div class="on-page-slider">
		<div class="control prev"><span></span></div>
		<div class="control next"><span></span></div>
		<div class="slider-dots"></div>

		<a href="#" class="viewport">
			<img src="<?=$pathCDN?>images/product-slider/s1.jpg" alt="">
		</a>

		<div class="mini-slider">
			<div id="owl-example1" class="owl-carousel" data-init-params="<? yamEgg::createSlider($initParams); ?>">
				<div class="thumb"><a>
					<img src="<?=$pathCDN?>images/product-slider/s1.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s1.jpg"
						 data-img-big="<?=$pathCDN?>images/product-slider/s1.jpg" alt=""></a>
				</div>
				<div class="thumb"><a>
					<img src="<?=$pathCDN?>images/product-slider/s2.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s2.jpg"
						 data-img-big="<?=$pathCDN?>images/product-slider/s2.jpg" alt=""></a>
				</div>
				<div class="thumb"><a>
					<img src="<?=$pathCDN?>images/product-slider/s3.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s3.jpg"
						 data-img-big="<?=$pathCDN?>images/product-slider/s3.jpg" alt=""></a>
				</div>
				<div class="thumb"><a>
					<img src="<?=$pathCDN?>images/product-slider/s4.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s4.jpg"
						 data-img-big="<?=$pathCDN?>images/product-slider/s4.jpg" alt=""></a>
				</div>
				<div class="thumb"><a>
					<img src="<?=$pathCDN?>images/product-slider/s5.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s5.jpg"
						 data-img-big="<?=$pathCDN?>images/product-slider/s5.jpg" alt=""></a>
				</div>
				<div class="thumb product-video"><a>
					<img src="<?=$pathCDN?>images/product-slider/s6.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s6.jpg"
						 data-img-big="" alt=""></a>
				</div>
				<div class="thumb product-video"><a>
					<img src="<?=$pathCDN?>images/product-slider/s6.jpg"
						 data-img-hover="<?=$pathCDN?>images/product-slider/s6.jpg"
						 data-img-big="" alt=""></a>
				</div>
			</div>
		</div>

	</div>

	<div class="save-video">
		<iframe style="border: 0;" width="560" height="315" src="//www.youtube.com/embed/uphxFHnVv1E" allowfullscreen></iframe>
		<iframe style="border: 0;" width="560" height="315" src="//www.youtube.com/embed/gT9nmXPmTXI" allowfullscreen></iframe>
	</div>

	<div class="product-title">Спальный мешок Caribee Nordic Compact 1000 (+5°C) Graphite/Red</div>

</div>