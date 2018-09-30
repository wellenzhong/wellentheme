
var mySwiper = new Swiper('.swiper-container', {
    autoplay: 5000,//可选选项，自动滑动
})
jQuery(".mobile-menu").click(function () {
    jQuery("body").css("overflow", "hidden")
    jQuery(".mobile-screen").addClass('screen-active')
})
jQuery(".mobile-back").click(function () {
    jQuery("body").css("overflow", "auto");
    jQuery(".mobile-screen").removeClass('screen-active')
})