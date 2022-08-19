$(document).ready(function() {
    "use strict";

    $('.header .main-nav .mobile').on('click', function() {
      $('.header .main-nav .list').slideToggle(250);
    })

    $('.slider-content').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        speed: 1500,
        prevArrow: '<button type="button" class="slick-prev"><i class="las la-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="las la-angle-right"></i></button>',
      });
});