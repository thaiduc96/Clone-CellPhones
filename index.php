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
</head>
<body>
<header class="only-pc ">
    <div class="responsive">
        <div class="Menu">
            <div class="Menu-branch">
                <div class="Menu-branch_logo">
                    <img src="/common/image/logo.webp" alt="">
                </div>
                <div class="Menu-branch-search">
                    <div class="Menu-branch-search-location">
                        <p class="js-LocationButton Menu-branch-search-location_txt">Hà nội</p>
                        <div class="Menu-branch-search-location_select">
                            <p> <i class="fa fa-map-marker"></i>Hà Nội</p>
                            <p> <i class="fa fa-map-marker"></i>Hồ Chí Minh</p>
                        </div>
                    </div>
                    <div class="Menu-branch-search-input">
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                    <div class="Menu-branch-search-bts">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="Menu-list">
                <div class="Menu-list-item">
                    <div class="js-MenuListItem Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">ĐIỆN THOẠI</p>
                    </div>
                    <div class="Menu-list-item-sub">
                        <div class="Menu-list-item-sub-list">
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="js-MenuListItem Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">TABLET</p>
                    </div>
                    <div class="Menu-list-item-sub">
                        <div class="Menu-list-item-sub-list">
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                                <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">PHỤ KIỆN</p>
                    </div>
                    <div class="Menu-list-item-sub">
                        <div class="Menu-list-item-sub-list">
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">ĐỒNG HỒ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">ÂM THANH</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">LAPTOP</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">SIM THẺ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">HÀNG CŨ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">TRẢ GÓP</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">DỊCH VỤ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">CÔNG NGHỆ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">DOANH NGHIỆP</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">KHUYẾN MẠI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="only-sp ">
    <div class="responsive">
        <div class="Menu">
            <div class="Menu-branch">
                <div class="Menu-branch_logo">
                    <img src="/common/image/logo.webp" alt="">
                </div>
                <div class="Menu-branch-search">
                    <div class="Menu-branch-search-location">
                        <p class="js-LocationButton Menu-branch-search-location_txt">Hà nội</p>
                        <div class="Menu-branch-search-location_select">
                            <p> <i class="fa fa-map-marker"></i>Hà Nội</p>
                            <p> <i class="fa fa-map-marker"></i>Hồ Chí Minh</p>
                        </div>
                    </div>
                    <div class="Menu-branch-search-input">
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                    <div class="Menu-branch-search-bts">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="Menu-list">
                <div class="Menu-list-item">
                    <div class="js-MenuListItem Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">ĐIỆN THOẠI</p>
                    </div>
                    <div class="Menu-list-item-sub">
                        <div class="Menu-list-item-sub-list">
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="js-MenuListItem Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">TABLET</p>
                    </div>
                    <div class="Menu-list-item-sub">
                        <div class="Menu-list-item-sub-list">
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">PHỤ KIỆN</p>
                    </div>
                    <div class="Menu-list-item-sub">
                        <div class="Menu-list-item-sub-list">
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                            <div class="Menu-list-item-sub-item">
                                <a href="#" class="Menu-list-item-sub-item_txt">Ipad Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">ĐỒNG HỒ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">ÂM THANH</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">LAPTOP</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">SIM THẺ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">HÀNG CŨ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">TRẢ GÓP</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">DỊCH VỤ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">CÔNG NGHỆ</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">DOANH NGHIỆP</p>
                    </div>
                </div>
                <div class="Menu-list-item">
                    <div class="Menu-list-item-content">
                        <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                        <p class="Menu-list-item-content_txt">KHUYẾN MẠI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php insertJS('/top/js/script.js'); ?>
</body>
</html>
