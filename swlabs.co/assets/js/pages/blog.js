jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {
    	if($('.slide-blog-detail').length > 0) {
            $('.slide-blog').slick({
                infinite: true,
                speed: 600,
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }

        var close_post_left, close_post_right;
        close_post_left = close_post_right = false;
        $('.slide-box .close').on('click', function(event) {
            /* Act on the event */
            if( $(this).parent().hasClass('post-left') ) {
                close_post_left = true;
                $('.slide-box.post-left').css('left', '-400px');
            }
            else if( $(this).parent().hasClass('post-right') ) {
                close_post_right = true;
                $('.slide-box.post-right').css('right', '-400px');
            }
        });

        $(window).scroll(function(event) {
            /* Act on the event */
            if(window.innerWidth > 991) {
                if( $(this).scrollTop() > $(document).innerHeight()/2 ) {
                    if(close_post_left != true)
                        $('.slide-box.post-left').css('left', '0');
                    if(close_post_right != true)
                        $('.slide-box.post-right').css('right', '0');
                }
                else {
                    $('.slide-box.post-left').css('left', '-400px');
                    $('.slide-box.post-right').css('right', '-400px');
                }
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
});