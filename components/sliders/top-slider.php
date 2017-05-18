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

<div class="top-slider">
    <div class="control prev"><span>prev</span></div>
    <div class="control next"><span>next</span></div>
    <div class="slider-dots"></div>

    <div class="owl-carousel" data-init-params="<?php $yamEgg->createSlider($initParams); ?>">
<!--
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/topsl1.jpg');"></div>
-->
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/topsl1.jpg');">
            <img src="<?=$yamEgg->img();?>images/topsl1.jpg" alt=""> <!--размер картинки 774px(ширина) *402px (высота), все картинки одинакового размера должны быть!!!!-->
        </div>

        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/topsl1.jpg');">
            <img src="<?=$yamEgg->img();?>images/topsl1.jpg" alt="">
        </div>
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/topsl1.jpg');">
            <img src="<?=$yamEgg->img();?>images/topsl1.jpg" alt="">
        </div>


    </div>
</div>
