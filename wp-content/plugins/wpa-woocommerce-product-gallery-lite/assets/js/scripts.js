jQuery(function ($) {

    'use strict';

    (function () {
        $('.wpa-woocommerce-product-gallery').css({"opacity": "1"});

        if ($('.wpa-product-gallery').length > 0) {

            var wpaThumbnailShow = parseInt($('.wpa-woocommerce-product-gallery').attr('data-thumbnails')),
            wpaArrowShow = $('.wpa-woocommerce-product-gallery').attr('data-wpa-navigation'),
            wpaAdaptiveHeight = $('.wpa-woocommerce-product-gallery').attr('data-adaptive-height'),
            wpaCenterMode = $('.wpa-woocommerce-product-gallery').attr('data-centermode'),
            wpaRTL = $('.wpa-woocommerce-product-gallery').attr('data-rtl'),
            wpaInfinite = false,
            wpaRTLMode = false;

            // arrow visibility
            if (wpaArrowShow == 'yes') {
                wpaArrowShow = true;
            } else {
                wpaArrowShow = false;
            }

            // thumbnail center mode
            if (wpaCenterMode == 'yes') {
                wpaCenterMode = true;
                wpaInfinite = true;
            } else {
                wpaCenterMode = false;
            }

            // RTL mode
            if (wpaRTL == 'yes') {
                wpaRTLMode = true;
            }


            $('.wpa-product-gallery').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: wpaArrowShow,
                autoplay: false,
                adaptiveHeight: wpaAdaptiveHeight,
                infinite: wpaInfinite,
                touchMove: false,
                draggable: false,
                swipe: false,
                rtl: wpaRTLMode,
                prevArrow: '<button class="wpawg-prev"><i class="flaticon-left-arrow-3"></i></button>',
                nextArrow: '<button class="wpawg-next"><i class="flaticon-right-arrow-2"></i></button>',
                asNavFor: '.wpa-product-gallery-thumbs',
            });

            $('.wpa-product-gallery-thumbs').slick({
                slidesToShow: parseInt(wpaThumbnailShow),
                slidesToScroll: 1,
                asNavFor: '.wpa-product-gallery',
                arrows: wpaArrowShow,
                autoplay: false,
                focusOnSelect: true,
                infinite: wpaInfinite,
                centerMode: wpaCenterMode,
                rtl: wpaRTLMode,
                prevArrow: '<button class="wpawg-prev"><i class="flaticon-left-arrow-2"></i></button>',
                nextArrow: '<button class="wpawg-next"><i class="flaticon-right-arrow-3"></i></button>',
            });

            // variation image
            var firstImage = $('.wpa-product-gallery .slick-track .slick-current img'),
            firstGridImage = $('.wpa-gallery-init .featured-image .wpa-product-image img'),
            firstThumb = $('.wpa-product-gallery-thumbs .slick-track .slick-current img'),
            zoomGridImage = $('.wpa-gallery-init .wpa-gallery-wrapper .featured-image img.zoomImg');

            firstImage.removeAttr('srcset');
            firstThumb.removeAttr('srcset');
            firstGridImage.removeAttr('srcset');
            
            var imagePopupSrc = $('.wpa-product-gallery .slick-track .slick-current .wpawg-image-popup');

            var origSrc = firstThumb.attr('src'),
                origSrcImg = firstImage.attr('src'),
                origGridSrcImg = firstGridImage.attr('src'),
                dataLargeImage = firstThumb.attr('data-large_image');

            var wpawgZoom = $('.wpa-woocommerce-product-gallery').attr('data-zoom');
            
            $( '.variations_form' ).on('found_variation', function( event, variation ) {

                if( variation.image.src ) {
                    firstImage.attr('src', variation.image.src);
                    firstGridImage.attr('src', variation.image.src);
                    firstThumb.attr('src', variation.image.gallery_thumbnail_src);
                    imagePopupSrc.attr('data-mfp-src', variation.image.full_src);
                }

                $('.wpa-product-gallery').slick('slickGoTo', 0);

                if (wpawgZoom == 'yes') {
                    
                    var imageZoomSrc = $('.wpa-product-gallery .slick-track .slick-current img.zoomImg, .wpa-woocommerce-product-gallery .wpa-product-single-image img.zoomImg');
                    
                    if( variation.image.src ) {
                        setTimeout(function(){
                            imageZoomSrc.attr('src', variation.image.full_src);
                        }, 100 );
                    }
                }

            });

            $( '.variations_form' ).on( 'reset_image', function() {
                firstImage.attr('src', origSrcImg);
                firstThumb.attr('src', origSrc);
                firstGridImage.attr('src', origGridSrcImg);
                imagePopupSrc.attr('data-mfp-src', dataLargeImage);
                zoomGridImage.attr('src', origSrcImg);

                $('.wpa-product-gallery-thumbs').slick('slickGoTo', 0);

                if (wpawgZoom == 'yes') {
                    
                    var imageZoomSrc = $('.wpa-product-gallery .slick-track .slick-current img.zoomImg, .wpa-woocommerce-product-gallery .wpa-product-single-image img.zoomImg');
                    imageZoomSrc.attr('src', dataLargeImage);
                }
            });

            $( '.reset_variations' ).on( 'click', function() {
                if (wpawgZoom == 'yes') {
                    
                    var imageZoomSrc = $('.wpa-product-gallery .slick-track .slick-current img.zoomImg, .wpa-woocommerce-product-gallery .wpa-product-single-image img.zoomImg');
                    imageZoomSrc.attr('src', dataLargeImage);
                }
            });

            // On before slide change
            $('.wpa-product-gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide){
                $('.wpa-product-gallery .wpawg-video-popup, .wpa-product-gallery .wpawg-image-popup').css('display', 'none');
            });

            // On after slide change
            $('.wpa-product-gallery').on('afterChange', function(event, slick, currentSlide, nextSlide){
                $('.wpa-product-gallery .wpawg-video-popup, .wpa-product-gallery .wpawg-image-popup').css('display', 'block');
            });
        }
    }());



    /* ======= Magnific Popup for image ======= */
    (function(){
        if ($('.wpawg-image-popup').length > 0) {

            $('.wpa-product-gallery .slick-list, .wpa-product-single-image > div').magnificPopup({
                delegate: '.wpawg-image-popup',
                type: 'image',
                mainClass: 'mfp-with-fade',
                removalDelay: 300,
                fixedContentPos: true,
                image: {
                    verticalFit: true
                },
                gallery:{
                    enabled:true,
                },
                callbacks: {
                    open: function() {
                        var wpaMfp = $.magnificPopup.instance;
                        var wpaProto = $.magnificPopup.proto;
                        var wpaArrowRight = $('.mfp-arrow-right');
                        var wpaArrowLeft = $('.mfp-arrow-left');

                        // extend function that moves to next item
                        wpaMfp.next = function() {
                            // if index is not last, call parent method
                            if(wpaMfp.index < wpaMfp.items.length - 1) {
                                wpaProto.next.call(wpaMfp);
                                wpaArrowLeft.show();
                            } else {
                               // otherwise do whatever you want, e.g. hide "next" arrow
                               wpaArrowRight.hide();
                            }
                        };

                        // same with prev method
                        wpaMfp.prev = function() {
                            if(wpaMfp.index > 0) {
                                wpaProto.prev.call(wpaMfp);
                                wpaArrowRight.show();
                            } else {
                               // otherwise do whatever you want, e.g. hide "prev" arrow
                               wpaArrowLeft.hide();
                            }
                        };
                    }
                }
            });
        }
    }());


    /* ======= Image Zoom ======= */
    var WpaZoom = function(){
        var wpawgZoom = $('.wpa-woocommerce-product-gallery').attr('data-zoom');
        if ($('.wpa-woocommerce-product-gallery').length > 0 && wpawgZoom == 'yes') {
            $('.wpa-product-gallery .slick-track .slick-slide, .wpa-woocommerce-product-gallery .wpa-product-single-image > div').zoom({
                on: 'mouseover', // other options: grab, click, toggle, mouseover
                duration: 500,
                magnify: 1
            });
        }
    };

    WpaZoom();

});