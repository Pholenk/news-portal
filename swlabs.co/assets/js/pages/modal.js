jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {
        if($('.modal-single-post').length > 0) {
            var scroll_width = (window.innerWidth-$(window).width());
            var check_slick_first = false;
            var check_slick_second = false;
            $('.news-content .title').click(function(event) {
                setTimeout(function () {
                    if(check_slick_first === true ) {
                        $('.list-news.related').slick('unslick');
                    }
                    check_slick_first = true;
                    $('.list-news.related').slick({
                        infinite: true,
                        speed: 600,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: false,
                        arrows: true,
                        responsive: [
                            {
                                breakpoint: 769,
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
                    $('.modal-single-post.in .change-post .prev-post').css('left', parseInt($('.modal-single-post.in .modal-dialog').css('margin-left'),10)+5);
                    $('.modal-single-post.in .change-post .next-post').css('right', parseInt($('.modal-single-post.in .modal-dialog').css('margin-left'),10)+scroll_width+5);
                },1000);
            });

            $('.tab-more,.tab-related').click(function(event) {
                setTimeout(function () {
                    if(check_slick_first === true ) {
                        $('.list-news.related').slick('unslick');
                    }
                    if(check_slick_second === true ) {
                        $('.list-news.more').slick('unslick');
                    }
                    check_slick_second = true;

                    $('.list-news.more,.list-news.related').slick({
                        infinite: true,
                        speed: 600,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: false,
                        arrows: true,
                        responsive: [
                            {
                                breakpoint: 769,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 481,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    speed: 400
                                }
                            }
                        ]
                    });
                },180);
            });

            $('.modal-single-post .close').click(function(event) {
                /* Act on the event */
                $('.modal-single-post.in .change-post .prev-post').css('left', -100);
                $('.modal-single-post.in .change-post .next-post').css('right', -100);
            });

            $(window).on('resize', function() {
                $('.modal-single-post.in .change-post .prev-post').css('left', parseInt($('.modal-single-post.in .modal-dialog').css('margin-left'))+5);
                $('.modal-single-post.in .change-post .next-post').css('right', parseInt($('.modal-single-post.in .modal-dialog').css('margin-left'))+scroll_width+5);
            });
        }
    };

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.mainFunction();
    });

    /*=====  End of INIT FUNCTIONS  ======*/
});