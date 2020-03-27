//    Awal Slider   //

$(document).ready(function () {
    new Swiper('#visiSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            delay: 3000,
            dynamicBullets: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }

    });

})

$(document).ready(function () {
    new Swiper('#prinsipSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            delay: 3000,
            dynamicBullets: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }

    });

})

$(document).ready(function () {

    new Swiper('#projectSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        keyboard: {
            enabled: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });


})

$(document).ready(function () {
    new Swiper('#teamSwiper', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            delay: 3000,
            dynamicBullets: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }
    });
})

//    Akhir Slider   //

//  --- awal-menu-active --- //

$(document).on('click', 'ul li', function () {
    $(this).addClass('active').siblings().removeClass('active')
})

//  --- akhir-menu-active --- //

// --- awal-loader --- //
$(document).ready(function () {
    setTimeout(function () {
        $(".preloader").fadeOut();
    }, 2000);
})

// --- awal-loader --- //