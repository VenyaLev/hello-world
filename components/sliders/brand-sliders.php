<?php
$initParams = array(
	'items' => '5',
	'loop' => 'true',
	'mouseDrag' => 'false',
	'touchDrag' => 'false',
	'autoplay' => 'false',
	'nav' => 'false',
	'dots' => 'false'
);
?>

<div class="brand-sliders">
	<div class="control prev"><span></span></div>
	<div class="control next"><span></span></div>
	<div class="slider-dots"></div>

	<div class="owl-carousel" data-init-params="<?php $yamEgg->createSlider($initParams); ?>">
		<div class="item">
			<div class="brandWr">
				<ul>
					<li><a class="brandImg" style="background-image: url(<?=$yamEgg->img().'images/b1.jpg'?>)" href="#"></a></li>
					<li><a href="#">Горелки, лампы и баллоны</a></li>
					<li><a href="#">Дорожные сумки и чемоданы</a></li>
					<li><a href="#">Ножи туристические</a></li>
					<li><a href="#">Палатки</a></li>
					<li><a class="productMore" href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="brandWr">
				<ul>
					<li><a class="brandImg" style="background-image: url(<?=$yamEgg->img().'images/b2.jpg'?>)" href="#"></a></li>
					<li><a href="#">Горелки, лампы и баллоны</a></li>
					<li><a href="#">Дорожные сумки и чемоданы</a></li>
					<li><a href="#">Ножи туристические</a></li>
					<li><a href="#">Палатки</a></li>
					<li><a class="productMore" href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="brandWr">
				<ul>
					<li><a class="brandImg" style="background-image: url(<?=$yamEgg->img().'images/b3.png'?>)" href="#"></a></li>
					<li><a href="#">Горелки, лампы и баллоны</a></li>
					<li><a href="#">Дорожные сумки и чемоданы</a></li>
					<li><a href="#">Ножи туристические</a></li>
					<li><a href="#">Палатки</a></li>
					<li><a class="productMore" href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="brandWr">
				<ul>
					<li><a class="brandImg" style="background-image: url(<?=$yamEgg->img().'images/b4.png'?>)" href="#"></a></li>
					<li><a href="#">Горелки, лампы и баллоны</a></li>
					<li><a href="#">Дорожные сумки и чемоданы</a></li>
					<li><a href="#">Ножи туристические</a></li>
					<li><a href="#">Палатки</a></li>
					<li><a class="productMore" href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="brandWr">
				<ul>
					<li><a class="brandImg" style="background-image: url(<?=$yamEgg->img().'images/b5.jpg'?>)" href="#"></a></li>
					<li><a href="#">Горелки, лампы и баллоны</a></li>
					<li><a href="#">Дорожные сумки и чемоданы</a></li>
					<li><a href="#">Ножи туристические</a></li>
					<li><a href="#">Палатки</a></li>
					<li><a class="productMore" href="#"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
