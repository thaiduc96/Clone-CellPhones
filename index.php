<?php
/**
 * Created by PhpStorm.
 * User: huynh
 * Date: 04-Apr-20
 * Time: 2:36 PM
 */
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('TITLE', 'Home');
require_once DOC_ROOT . '/common/php/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <?php insertHeadInfo(); ?>
    <?php insertCSS('/top/css/style.css'); ?>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<!--banner-->
<?php include_once (DOC_ROOT .'/common/inc/header.php'); ?>
<!--banner-->
    <div class="responsive">
        <div class="Banner">
            <div class="js-Carousel Carousel">
                <div class="js-CarouselContent Carousel-content">
                    <div class="js-CarouselList Carousel-content-list">
                        <?php
                        for($i = 1; $i < 7; $i+=2) {
                        ?>
                        <div class="Carousel-content-item" id="carousel<?=$i?>">
                            <img src="/top/image/belking_dung_thu_mien_phi.webp" alt="">
                        </div>
                        <div class="Carousel-content-item" id="carousel<?=$i+1?>">
                            <img src="/top/image/8_plus_14tr.webp" alt="">
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="js-CarouselBtn Carousel-content_btn"></div>
                    <div class="js-CarouselBtn Carousel-content_btn Carousel-content_btn_right"></div>
                </div>
                <div class="Carousel-nav">
                    <?php
                    for($i = 1; $i < 7; $i++) {
                    ?>
                        <div class="js-CarouselNavItem Carousel-nav-item <?= ($i == 1) ? "Carousel-nav-item-active" : "" ?> " data-index="<?=$i?>">
                            <p class="only-pc Carousel-nav-item_txt"><?=$i?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="Banner-content">
                <a href="#" class="Banner-content_item">
                    <img src="/top/image/hp_asus.webp" alt="">
                </a>
                <a href="#" class="Banner-content_item">
                    <img src="/top/image/Right-banner-ip11.webp" alt="">
                </a>
            </div>
        </div>
    </div>
<?php insertJS('/top/js/script.js'); ?>
</body>
</html>
