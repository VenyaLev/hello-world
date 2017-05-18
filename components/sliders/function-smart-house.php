<?php
$initParams = array(
    'items' => '1',
    'loop' => 'true',
    'mouseDrag' => 'false',
    'touchDrag' => 'false',
    'autoplay' => 'false',
    'nav' => 'false',
    'dots' => 'false'
);
?>

<script>
    var arr = [
                {
                    'id':0,
                    'img': [
                        {
                            href: 'images/bh-1.jpg',
                            type: "image",
                            title: "some",
                            isDom: false
                        },
                        {
                            href: 'images/bh-2.jpg',
                            type: "image",
                            title: "some",
                            isDom: false
                        },
                        {
                            href: 'images/bh-3.jpg',
                            type: "image",
                            title: "some",
                            isDom: false
                        }
                    ]
                },
        {
            'id':1,
            'img': [
                {
                    href: 'images/g-1.jpg',
                    type: "image",
                    title: "some",
                    isDom: false
                },
                {
                    href: 'images/g-2.jpg',
                    type: "image",
                    title: "some",
                    isDom: false
                },
                {
                    href: 'images/g-3.jpg',
                    type: "image",
                    title: "some",
                    isDom: false
                }
            ]
        },
        {
            'id':2,
            'img': [
                {
                    href: 'images/sl1.jpg',
                    type: "image",
                    title: "some",
                    isDom: false
                },
                {
                    href: 'images/sl2.jpg',
                    type: "image",
                    title: "some",
                    isDom: false
                },
                {
                    href: 'images/sl3.jpg',
                    type: "image",
                    title: "some",
                    isDom: false
                }
            ]
        }
        ];
</script>

<div class="slider-funcSH">
    <div class="control prev"><span></span></div>
    <div class="control next"><span></span></div>
    <div class="slider-dots"></div>

    <div class="owl-carousel" data-init-params="<?php $yamEgg->createSlider($initParams); ?>">
        <div class="item" data-id="0">
            <div class="topHome">
                <a class="centerImg fancybox" rel="fancybox-thumb"  href="<?=$yamEgg->img();?>images/home1.jpg">
                    <img src="<?=$yamEgg->img();?>images/home1.jpg" alt="">
                </a>

                <a class="absImg img1 fancybox" rel="fancybox-thumb" href="<?=$yamEgg->img();?>images/home11.jpg">
                    <img  src="<?=$yamEgg->img();?>images/home11.jpg" alt="">
                </a>
                <a class="absImg img2 fancybox" rel="fancybox-thumb" href="<?=$yamEgg->img();?>images/home12.jpg">
                    <img  src="<?=$yamEgg->img();?>images/home12.jpg" alt="">
                </a>
            </div>
            <p class="homeTitle">Дом Витан 1</p>
        </div>
        <div class="item" data-id="1">
            <div class="topHome">
                <a class="centerImg fancybox" rel="1" href="<?=$yamEgg->img();?>images/home1.jpg">
                    <img src="<?=$yamEgg->img();?>images/home1.jpg" alt="">
                </a>

                <a class="absImg img1 fancybox" rel="1" href="<?=$yamEgg->img();?>images/home11.jpg">
                    <img  src="<?=$yamEgg->img();?>images/home11.jpg" alt="">
                </a>
                <a class="absImg img2 fancybox" rel="1" href="<?=$yamEgg->img();?>images/home12.jpg">
                    <img  src="<?=$yamEgg->img();?>images/home12.jpg" alt="">
                </a>
            </div>
            <p class="homeTitle">Дом Витан 2</p>
        </div>
        <div class="item" data-id="2">
            <div class="topHome">
                <a class="centerImg fancybox" rel="2" href="<?=$yamEgg->img();?>images/home1.jpg">
                    <img src="<?=$yamEgg->img();?>images/home1.jpg" alt="">
                </a>

                <a class="absImg img1 fancybox" rel="2" href="<?=$yamEgg->img();?>images/home11.jpg">
                    <img  src="<?=$yamEgg->img();?>images/home11.jpg" alt="">
                </a>
                <a class="absImg img2 fancybox" rel="2" href="<?=$yamEgg->img();?>images/home12.jpg">
                    <img  src="<?=$yamEgg->img();?>images/home12.jpg" alt="">
                </a>
            </div>
            <p class="homeTitle">Дом Витан 3</p>
        </div>
    </div>
</div>
