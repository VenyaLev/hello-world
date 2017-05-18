<?php
$initParams = array(
    'items' => '3',
    'loop' => 'true',
    'mouseDrag' => 'true',
    'touchDrag' => 'true',
    'autoplay' => 'true',
    'nav' => 'false',
    'dots' => 'false'
);
?>

<div class="aboutUsSlider">
    <div class="control prev"><span></span></div>
    <div class="control next"><span></span></div>
    <div class="slider-dots"></div>

    <div class="owl-carousel" data-init-params="<?php $yamEgg->createSlider($initParams); ?>">
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/sl1.jpg'); "></div>
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/sl2.jpg'); "></div>
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/sl3.jpg'); "></div>
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/sl2.jpg');"></div>
        <div class="item" style="background-image: url('<?=$yamEgg->img();?>images/sl3.jpg'); "></div>
    </div>
</div>
