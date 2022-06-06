import "./import/modules";
import jQuery from "jquery";
import "select2/dist/js/select2.full.js";
import Swiper, {
    Navigation,
    Pagination,
    Controller
} from "swiper";
Swiper.use([Navigation, Pagination, Controller]);

$(window).on('load', function () {

    const $sliderMain = document.querySelector('.js-slider-main');

    if ($sliderMain) {
        const swiper = new Swiper($sliderMain, {
            navigation: {
                nextEl: $sliderMain.querySelector('.js-slider-main-next'),
                prevEl: $sliderMain.querySelector('.js-slider-main-prev'),
            },
            pagination: {
                el: $sliderMain.querySelector('.js-pagination'),
                type: 'bullets',
            },

        });
    }

    const $slider = document.querySelectorAll('.js-slider');

    if ($slider) {
        $slider.forEach(item => {
            if (item.classList.contains('js-slider-view-3')) {
                const slider = new Swiper(item, {
                    loop: true,
                    navigation: {
                        nextEl: item.querySelector('.js-slider-next'),
                        prevEl: item.querySelector('.js-slider-prev'),
                    },
    
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1280: {
                            slidesPerView: 3,
                        },
                    }
                });
            } else {
                const slider = new Swiper(item, {
                    loop: true,
                    navigation: {
                        nextEl: item.querySelector('.js-slider-next'),
                        prevEl: item.querySelector('.js-slider-prev'),
                    },
    
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                        1280: {
                            slidesPerView: 4,
                        }
                    }
                });
                
            }
            
        })
    }

    const $sliderRewiew = document.querySelector('.js-slider-reviews');

    if ($sliderRewiew) {
        new Swiper($sliderRewiew, {
            navigation: {
                nextEl: $sliderRewiew.querySelector('.js-slider-next'),
                prevEl: $sliderRewiew.querySelector('.js-slider-prev'),
            },
            pagination: {
                el: $sliderRewiew.querySelector('.js-pagination'),
                type: 'bullets',
            },
        });
    }

    const map = document.querySelector('.js-map');

    if (map) {
        ymaps.ready(init);
        function init() {
            var myMap = new ymaps.Map("map", {
                center: [53.743600, 87.126225],
                zoom: 17,
                controls: []
            });

            var myPlacemark = new ymaps.Placemark([53.744594, 87.126225], {}, {
                iconLayout: 'default#image',
                iconImageHref: '/img/img/map/baloon.png',
                iconImageSize: [231, 100],
                iconImageOffset: [-100, -70]
            });


            myMap.geoObjects.add(myPlacemark);
        }
    }

    const $navigation = $('.js-navigation');


    if ($navigation) {

        const navigationPosition = $navigation.offset().top;
        const navigationHeight = $navigation.outerHeight();

        const calcScroll = (navigationPosition - navigationHeight) - 60;

        $(window).on('scroll', function () {

            if (!$navigation.hasClass('fixed--allways')) {
                if ($(this).scrollTop() > calcScroll) {
                    if (!$navigation.hasClass('fixed')) {
                        $navigation.addClass('fixed');
                    }
                } else {
                    $navigation.show();
                    $navigation.removeClass('fixed')
                }
            }

        });

        const $btnModalCatalog = $('.js-open-catalog');


        $btnModalCatalog.on('click', function () {
            $(this).closest('.js-navigation').addClass('active');
            $('.js-modal-menu').addClass('active');
            $('body').css('overflow', 'hidden')
        })

        $('.js-modal-menu-close').on('click', function () {
            $(this).closest('.js-modal-menu').removeClass('active');
            $navigation.removeClass('active');
            $('body').css('overflow', 'visible')
        })
    }

    const $payBtn = $('.js-btn-pay');

    if ($payBtn) {
        $payBtn.on('click', function () {
            $(this).addClass('btn--hidden');
            $(this).next('.js-link').removeClass('btn--hidden')
        })
    }

    const $btnOpenMenu = $('.js-btn-menu');

    if ($btnOpenMenu) {
        $btnOpenMenu.on('click', function () {
            $('.js-menu-mobile').addClass('active');
        })
    }

    const $btnCloseMenu = $('.js-close-menu');

    if ($btnCloseMenu) {
        $btnCloseMenu.on('click', function () {
            $(this).closest('.js-menu-mobile').removeClass('active');
        })
    }

    const $accordeonBtn = $('.js-accordeon-button');

    if ($accordeonBtn) {
        $accordeonBtn.on('click', function () {
            $(this).toggleClass('active');
            $(this).next('.js-accrordeon-list').slideToggle('slow');
        });
    }

    const $filter = $('.js-filter');

    if ($filter) {
        $filter.on('submit', (e) => {
            e.preventDefault();
        })
    }

    const $sortFilter = $('.js-filter-sort');

    if ($sortFilter) {
        $sortFilter.on('click', function () {
            $sortFilter.removeClass('active');
            $(this).addClass('active');
        })
    }

    const $sortSelectMain = $('.js-filter-select-sort');

    if ($sortSelectMain) {
        $sortSelectMain.select2({
            containerCssClass: "filter-main",
            dropdownCssClass: "filter-main",
            width: '100%'
        })
    }

    const $btnChangeView = $('.js-change-view');

    if ($btnChangeView) {
        $btnChangeView.on('click', function () {
            const data = $(this).data('view');
            $btnChangeView.removeClass('active');
            $(this).addClass('active');

            if (data === 'list') {
                $('.js-catalog-list').addClass('list');
            } else {
                $('.js-catalog-list').removeClass('list');
            }
        })
    };

    const $openCatalog = $('.js-modal-catalog-open');

    if ($openCatalog) {
        $openCatalog.on('click', function () {
            $('.js-catalog-list-modal').addClass('active');
            $('body').css('overflow', 'hidden')
        })
    }

    const $btnCloseAccordeon = $('.js-close-accordeon');

    if ($btnCloseAccordeon) {
        $btnCloseAccordeon.on('click', function () {
            $(this).closest('.js-catalog-list-modal').removeClass('active');
            $('body').css('overflow', 'visible')
        })
    }


    if (document.querySelector('.js-gallery-top')) {
        var galleryTop = new Swiper('.js-gallery-top', {
        });

        var galleryThumbs = new Swiper('.js-gallery-thumbs', {
            spaceBetween: 15,
            slidesPerView: 5,
            slideToClickedSlide: true,
        });

        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    }

    const counterBtn = $('.js-counter-btn');

    if (counterBtn) {

        const counterInputs = $('.js-counter-input');
        counterInputs.each(function() {
            parseInt($(this).val()) <= 1 && $(this).closest('.js-counter').find('[data-counter="minus"]').attr('disabled', 'disabled')
        })


        counterBtn.on('click', function () {
            const typeAction = $(this).data('counter');
            const counterInput = $(this).closest('.js-counter').find('.js-counter-input');
            const counterInputVal = counterInput.val();
            console.log(counterInputVal)
            if (typeAction === 'plus') {
                $(this).closest('.js-counter').find('[data-counter="minus"]').removeAttr('disabled')
                counterInput.val(parseInt(counterInputVal) + 1);
                if (counterInputVal < 1) {
                    $(counterInput).val(1)
                } else if (counterInputVal >= 1 && counterInputVal < 100) {
                    $(counterInput).css('max-width', '26px')
                } else if (counterInputVal >= 100 && counterInputVal < 1000) {
                    $(counterInput).css('max-width', '34px')
                } else {
                    $(counterInput).css('max-width', '42px')
                }
            } else {
                if (counterInputVal <= 2) {
                    counterInput.val(parseInt(counterInputVal) - 1);
                    $(this).attr('disabled', 'disabled')
                } else {
                    counterInput.val(parseInt(counterInputVal) - 1)
                }

                if (counterInputVal < 1) {
                    $(counterInput).val(1)
                } else if (counterInputVal >= 1 && counterInputVal < 100) {
                    $(counterInput).css('max-width', '26px')
                } else if (counterInputVal >= 100 && counterInputVal < 1000) {
                    $(counterInput).css('max-width', '34px')
                } else {
                    $(counterInput).css('max-width', '42px')
                }

            }

        })

        $('.js-counter-input').on('input', function () {
            const val = $(this).val();

             if (val > 1 && val < 100) {
                $(this).css('max-width', '26px')
            } else if (val >= 100 && val < 1000) {
                $(this).css('max-width', '34px')
            } else if (val >= 1000) {
                $(this).css('max-width', '42px')
            } else {
                $(this).removeAttr('style')
            }
        });

        $('.js-counter-input').on('blur', function() {
            const val = $(this).val();
            if (val <= 1) {
                $(this).val(1)
                $(this).closest('.js-counter').find('[data-counter="minus"]').attr('disabled')
            } else {
                $(this).closest('.js-counter').find('[data-counter="minus"]').removeAttr('disabled')
            }
        })
    }

    if ($('.js-number')) {
        $('.js-number').each(function() {
            $(this).bind('change keyup input click', function () {
                if ($(this).val().match(/[^0-9]/g)) {
                    $(this).val($(this).val().replace(/[^0-9]/g, ''));
                }
            }); 
        })
    }

    
})