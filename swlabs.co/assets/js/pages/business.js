jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {        

        //slide stock in header menu
        $('.header-main.business .slide-stock').slick({
            infinite: true,
            speed: 600,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        speed: 500
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        speed: 400
                    }
                }
            ]
        });

        // slider banner main
        var news_with_sidebar = $('.banner-news-wrapper .main-slide');
        news_with_sidebar.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            autoplay: true,
            autoplayTimeout: 6000,
            autoplaySpeed: 1000,
            smartSpeed: 1000,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right" ></i>'],
            items: 1
        });

        //set active for news list
        news_with_sidebar.on("changed.owl.carousel", function(event) {
            var current = event.item.index;
            var datasrc = $(event.target).find('.owl-item').eq(current).find('.item').attr('data-item');
            //console.log(datasrc);
            $('.banner-news-wrapper .slide-items li').removeClass('active');
            $('.banner-news-wrapper .slide-items li.' + datasrc).addClass('active');
            if($('.banner-news-wrapper .slide-items li.active').is('li:first-child')) {
                $('.banner-news-wrapper .slide-items').mCustomScrollbar('scrollTo','top');
            }
            else
                $('.banner-news-wrapper .slide-items').mCustomScrollbar('scrollTo',
                    '-='+$('.banner-news-wrapper .slide-items li.active').prev().outerHeight(true));
        });
        //set active when click item
        $('.banner-news-wrapper .slide-items li').each(function(index) {
            $(this).click(function(event) {
                var xlenght = $('.banner-news-wrapper .owl-dots .owl-dot').length;
                var key = $(this).index();
                //console.log(key);
                $('.banner-news-wrapper .owl-dots .owl-dot').eq(key).click();
            });
        });
    }

    SLZ.resizeFunction = function() {
        if($('.banner-news-wrapper .main-news').length > 0 ) {
            var xh=$('.banner-news-wrapper .main-news').height();
            $('.banner-news-wrapper .title-news ul').css('height', xh - $('.banner-news-wrapper .title-news > div').outerHeight(true) );
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
