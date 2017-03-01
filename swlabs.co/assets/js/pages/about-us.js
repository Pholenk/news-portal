jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {
        $('.skill-set .skill-level').each(function(index, el) {
            $(this).find('.progress-bar').width($(this).find('.progress-bar').attr('aria-valuenow')+'%');
        });
    };

    SLZ.resizeFunction = function() {
        var size_inner = $('.our-team-wrapper .team-inner').length;
        
        $('.our-team-wrapper').slick({
            infinite: true,
            speed: 800,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        if(size_inner != $('.our-team-wrapper .team-inner').length) {
            $('.our-team-wrapper .team-inner').each(function(index, el) {
                $(this).addClass('fix-inner-position');      
            });
            // $('.our-team-wrapper .slick-dots').css('margin-bottom', '-5px');
        }
        else {
            $('.our-team-wrapper').addClass('fix-position');    
        }
    };

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.mainFunction();
    });

    /*=====  End of INIT FUNCTIONS  ======*/
    $(window).on('resize load', function() {
        SLZ.resizeFunction();
    });
});
