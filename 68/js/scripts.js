$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        loop : true ,
        slidesPerView : 3 ,    
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });
});