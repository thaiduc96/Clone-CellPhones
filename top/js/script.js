$(document).ready(function(){

    $(".js-LocationButton").click(function (e) {
        $(this).parent().toggleClass('Menu-branch-search-location-active');
    });

    $(".js-NavHamburger").click(function (e) {
        $(".jsNav").toggleClass('Nav-active');
        if($(".jsNav").hasClass('Nav-active')){
            $("body").addClass('no-scroll');
        }else{
            $("body").removeClass('no-scroll');
        }
    });

    var carousel = $(".js-Carousel");
    var carouselContent  = $(".js-CarouselContent");
    var itemLength = $(".js-CarouselList .Carousel-content-item").length;
    var isScrolling = false;
    carouseInit();
    $(window).on('resize',function () {
        carouseInit();
    });

    var currentItem = 1;
    $(".js-CarouselNavItem").click(function (e) {
        if($(this).hasClass('Carousel-nav-item-active')){
            return;
        }
        currentItem = $(this).attr('data-index');
        scrollCarousel(currentItem);
    });

    $(".js-CarouselBtn").click(function (e) {
        if(isScrolling) {
            return;
        }
            if($(this).hasClass('Carousel-content_btn_right')){
            currentItem++;
        } else {
            currentItem--;
        }
        if(currentItem > itemLength ){
            currentItem = 1
        }else if(currentItem < 1) {
            currentItem = itemLength
        }
        scrollCarousel(currentItem);
    });

    function carouseInit() {
        var mWidth = carousel.width();
        var mHeight = mWidth / 2.665;
        carouselContent.height(mHeight);
    }

    function scrollCarousel(index) {
        isScrolling = true;
        $(".Carousel-nav-item-active").removeClass('Carousel-nav-item-active');
        var carouselItem = $("#carousel" + index);
        $(".js-CarouselNavItem[data-index=" + index + "]").addClass('Carousel-nav-item-active');
        $(".js-CarouselList").animate({
            'left': 0 - carouselItem.position().left
        }, 400, function () {
            isScrolling = false;
        });
    }
//


//    product detail
    var isGiftScroll = false;
    $(".js-productGiftButton").click(function (e) {
        if(isGiftScroll){
            return;
        }else{
            isGiftScroll = true;
        }
        var parent = $(this).parent();
        if(parent.hasClass('Product-content-item-gift-active')){
            parent.removeClass('Product-content-item-gift-active');
            setTimeout(function () {
                parent.find('.Product-content-item-gift-detail').hide();
                isGiftScroll = false;
            },500)
        }else{
            parent.find('.Product-content-item-gift-detail').show();
            setTimeout(function () {
                parent.addClass('Product-content-item-gift-active');
                isGiftScroll = false;
            },20)

        }
    });

    setTimeout(function () {
        $(".js-cart").removeClass('Cart-disable');
    },1000)
});