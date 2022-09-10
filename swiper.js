const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    mousewheel: {
        sensetivity: true,
    },
    slidesPerView: 2,
    spaceBetween: 30,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        320: {
            slidesPerView: 1,
        },
        360: {
            slidesPerView: 1,
        },
        400: {
            slidesPerView: 1,
        },
        480: {
            slidesPerView: 1,
        },
        992: {
            slidesPerView: 2,
        },
    },
});
