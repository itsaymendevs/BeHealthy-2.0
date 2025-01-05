// :: root
const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");

const progressBannersCircle = document.querySelector(
    ".autoplay-progress.for-banners svg"
);
const progressBannersContent = document.querySelector(
    ".autoplay-progress.for-banners span"
);

const progressMenuCircle = document.querySelector(
    ".autoplay-progress.for-meal-plans svg"
);
const progressMenuContent = document.querySelector(
    ".autoplay-progress.for-meal-plans span"
);

// 1: PLANS

// 1.1: one
$(document).ready(function () {
    var planOne = new Swiper(".plans--swiper-1", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        grabCursor: true,
        keyboard: {
            enabled: true,
        },

        loop: true,

        breakpoints: {
            1: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            576: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
        },
    });
});

// -------------------------------------------------------------

// 2: BANNERS
$(document).ready(function () {
    var menuOne = new Swiper(".menu--swiper-1", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        grabCursor: true,
        keyboard: {
            enabled: true,
        },

        loop: true,
        centeredSlides: true,

        breakpoints: {
            1: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            576: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
        },
    });
});

// -------------------------------------------------------------
