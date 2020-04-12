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

<!--carousel-->
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
<!--carousel-->
<!--    item list-->
    <div class="responsive">
        <div class="Product">
            <div class="Product-head">
                <div class="Product-head_txt">
                    <a href="#">Điện thoại nổi bật</a>
                </div>
                <div class="Product-head-tag">
                    <p>iPhone</p>
                    <p>Samsung</p>
                    <p>Xiaomi</p>
                    <p>OPPO</p>
                    <p>Nokia</p>
                    <p>Realme</p>
                    <p>ASUS</p>
                    <p>Huewei</p>
                    <p>VSmart</p>
                    <p>Honor</p>
                </div>
            </div>
            <div class="Product-content">
                <div class="Product-content-list">
                    <?php
                    for($i = 1; $i < 11; $i++) {
                    ?>
                    <div class="Product-content-item">
                        <div class="Product-content-item_img">
                            <img src="/top/image/iphone11-purple-select-2019.webp" alt="">
                        </div>
                        <div class="Product-content-item-detail">
                            <p class="Product-content-item-detail_name">iPhone 11 Chính hãng (VN/A)</p>
                            <p class="Product-content-item-detail_price">19.100.000 ₫ <span>21.990.000 ₫</span></p>
                            <p class="Product-content-item-detail_text">Giảm 200.000đ khi mua kèm tai nghe airpods và <strong> 1 km</strong>  khác</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftButton Product-content-item-gift-btn"><i class="fas fa-gift"></i>Quà tặng</div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail_title">Trả góp 0%</p>
                                <p class="Product-content-item-gift-detail_txt">Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail_title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail_txt">Giảm 200.000đ khi mua kèm Tai nghe Airpods</p>
                                <p class="Product-content-item-gift-detail_txt">Thu cũ đổi mới iPhone chính hãng VNA - Bù tiền ít nhất</p>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<!--    item list-->

<!--notification-->
    <div class="Notification">
        <div class="Notification-content">
            <div class="Notification-content-message">
                Đã thêm giỏ hàng thành công
            </div>
        </div>
    </div>
<!--notification-->
    <div class="footer">

    </div>
<?php insertJS('/top/js/script.js'); ?>
</body>
</html>
