$(document).ready(function(){
    // $(".js-MenuListItem").mouseenter(function() {
    //     $(this).parent().find('.Menu-list-item-sub').addClass('Menu-list-item-active');
    // })
    // .mouseleave(function() {
    //     $(this).parent().find('.Menu-list-item-sub').removeClass('Menu-list-item-active');
    // });

    $(".js-LocationButton").click(function (e) {
        $(this).parent().toggleClass('Menu-branch-search-location-active');
    });
});