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
                            <p><i class="fa fa-map-marker"></i>Hà Nội</p>
                            <p><i class="fa fa-map-marker"></i>Hồ Chí Minh</p>
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
    <div class="jsNav Nav Nav-active">
        <div class="Nav-content">
            <div class="Nav-logo">
                <img src="/common/image/logo.webp" alt="Cellphones Logo">
            </div>
            <div class="Nav-search">
                <div class="Nav-search-content">
                    <div class="Nav-search_input">
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                    <div class="Nav-search_button">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="Nav-hamburger">
            <div class="js-NavHamburger Nav-hamburger-content">
                <span class="Nav-hamburger-content_icon"></span>
                <span class="Nav-hamburger-content_icon"></span>
                <span class="Nav-hamburger-content_icon"></span>
            </div>
        </div>
        </div>
        <div class="Nav-menu">
            <div class="Nav-menu-content">
                <div class="Nav-menu-content-list">
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                    <p class="Nav-menu-content-item">Điện thoại</p>
                </div>
                <div class="Nav-menu-content-footer">
                    <div class="Nav-menu-content-footer-contact">
                        <div class="Nav-menu-content-footer-contact_img">
                            <img src="/common/image/logo.webp" alt="">
                            <a href="tell:18002097">1800.2097</a>
                        </div>
                    </div>
                    <div class="Nav-menu-content-footer-location">
                        <p>Nơi mua</p>
                        <select>
                            <option> Ha noi</option>
                            <option> Ho chi mInh</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php insertJS('/top/js/script.js'); ?>
</body>
</html>
