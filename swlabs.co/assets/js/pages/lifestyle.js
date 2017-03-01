jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {

        // slide block main 3
        $('.block-main-3').slick({
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            fade: true, 
            autoplay: true,
            autoplaySpeed: 5000
        });


        $('.news-masonry').isotope({
            itemSelector: '.block-item-wrapper',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth: '.item-width-1',
                // gutter: 5
            }
        });

    };

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.mainFunction();
    });

    /*=====  End of INIT FUNCTIONS  ======*/

    $(window).on('resize load', function() {
    });

});
