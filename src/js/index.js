import "./import/modules";
import jQuery from "jquery";
import "select2/dist/js/select2.full.js";
import Swiper, {
    Navigation,
    Pagination,
    Controller,
    EffectFade
} from "swiper";
Swiper.use([Navigation, Pagination, Controller, EffectFade]);

$(window).on('load', function () {
    const $sliderMain = document.querySelector('.js-slider-main');

    if ($sliderMain) {
        const swiper = new Swiper($sliderMain, {
            navigation: {
                nextEl: $sliderMain.querySelector('.main__slider-arrow--right'),
                prevEl: $sliderMain.querySelector('.main__slider-arrow--left'),
            }
        });
    }

    const $brandSlider = document.querySelector('.js-brand-slider');

    if ($sliderMain) {
        const swiper = new Swiper($brandSlider, {
            slidesPerView: 'auto',
            spaceBetween: 20,
            navigation: {
                nextEl: $brandSlider.closest('.brand__section-box').querySelector('.js-brand-arrow-next'),
                prevEl: $brandSlider.closest('.brand__section-box').querySelector('.js-brand-arrow-prev'),
            }
        });
    }

    const $customSelect = $('.js-select');

    if ($customSelect) {
        $customSelect.each(function() {
            const type = $(this).data('type');

            $(this).select2({
                minimumInputLength: -1,
                width: '100%',
                placeholder: type,
            })
        })
    }

    const $sliderPortfolio = document.querySelector('.js-slider-gallery');

    if ($sliderPortfolio) {
        const swiper = new Swiper($sliderPortfolio, {
            effect: 'fade',
            noSwiping: 'false',
            fadeEffect: {
                crossFade: true
              },
              speed: 500,
            navigation: {
                nextEl: $sliderPortfolio.closest('.portfolio__inner').querySelector('.js-portfolio-arrow-next'),
                prevEl: $sliderPortfolio.closest('.portfolio__inner').querySelector('.js-portfolio-arrow-prev'),
            }
        });
    }

    const $galleryItem = document.querySelectorAll('.js-gallery-item');

    if ($galleryItem) {

        $galleryItem.forEach(item => {
            var galleryTop = new Swiper(item.querySelector('.js-slider-top'), {
                noSwiping: 'false'
            });
    
            var galleryThumbs = new Swiper(item.querySelector('.js-slider-bottom'), {
                spaceBetween: 16,
                slidesPerView: 4,
                slideToClickedSlide: true,
                noSwiping: 'false'
            });
    
            galleryTop.controller.control = galleryThumbs;
            galleryThumbs.controller.control = galleryTop;
        })
    }

    const $offerButton = $('.js-offer-button');

    if ($offerButton) {
        $offerButton.on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active')
        })
    }
})