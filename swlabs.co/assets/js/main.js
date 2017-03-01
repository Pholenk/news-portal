jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.headerFunction = function() {

        /*================= Dropdown Language ===================*/
        // Show - Hide dropdown language on topbar
        $('.dropdown-text').on('click', function(){
            if ($(this).parent().find(".dropdown-language").hasClass('hide') === false) {
                $(this).parent().find(".dropdown-language").addClass('hide');
                $('.dropdown-language').addClass('hide');
            }
            else {
                $('.dropdown-language').addClass('hide');
                $(this).parent().find(".dropdown-language").removeClass('hide');
            }
        });
        // hide dropdown language on topbar
        $('body').on('click', function(event){
            if ( $('.dropdown-text').has(event.target).length === 0 && !$('.dropdown-text').is(event.target)) {
                $('.dropdown-language').addClass('hide');
            }
        });

        /*================= Dropdown Search Menu ===================*/
        // Show - hide box contact-us on footer
        $('.button-mail .link').on('click', function () {
            $('.form-mail').toggleClass('hide');
        });

        //hide box when click outside
        $('body').on('click', function (event) {
            if ($('.button-mail').has(event.target).length === 0 && !$('.button-mail').is(event.target) && $('.form-mail').has(event.target).length === 0 && !$('.form-mail').is(event.target)) {
                if ($('.form-mail').hasClass('hide') === false) {
                    $('.form-mail').addClass('hide');
                }
            }
        });

        // Show - hide box contact-us on footer
        $('#button-mail ').on('click', function () {
            $('.contact-form-wrapper').toggleClass('hide');
        });

        //hide box when click outside
        $('body').on('click', function (event) {
            if ($('#button-mail').has(event.target).length === 0 && !$('#button-mail').is(event.target) && $('.contact-form-wrapper').has(event.target).length === 0 && !$('.contact-form-wrapper').is(event.target)) {
                if ($('.contact-form-wrapper').hasClass('hide') === false) {
                    $('.contact-form-wrapper').addClass('hide');
                }
            }
        });

        /*================= Dropdown Search Menu ===================*/
        // Show - hide box search on menu
        $('.button-search .icons').on('click', function () {
            $('.nav-search').toggleClass('hide');
        });

        //hide box seach when click outside
        $('body').on('click', function (event) {
            if ($('.button-search').has(event.target).length === 0 && !$('.button-search').is(event.target) && $('.nav-search').has(event.target).length === 0 && !$('.nav-search').is(event.target)) {
                if ($('.nav-search').hasClass('hide') === false) {
                    $('.nav-search').addClass('hide');
                }
            }
        });

        /*================= Fixed Header When Scroll ===================*/
        setTimeout(function(){ 
            var place_fixed = $('.fixed-header').offset().top;
            $(window).scroll(function() {
                if ($(this).scrollTop() > place_fixed){  
                    $('.fixed-header').addClass("sticky-header");
                }
                else{
                    $('.fixed-header').removeClass("sticky-header");
                }
            });
        }, 300);

        /*================= Show MeGa Menu ===================*/
        $(".hamburger-menu").on('click', function(){
            $(".hamburger-menu").toggleClass("active");
            if(window.innerWidth > 767) {
                $('body').toggleClass("show-megamenu");
                $('body').toggleClass("overflow-hidden");

                // scroll menu 
                if ($('.fixed-header').hasClass("sticky-header")) {
                    $('.mega-menu').css("min-height", $(window).height() - $(".fixed-header").height() + 60 );
                }
                else {
                    $('.mega-menu').css("min-height", $(window).height() - ($(".header-main").height() - $(".header-bottom").height()) + 60);
                }

                if(!$('body').hasClass('show-megamenu')) {
                    $('.mega-menu').css("min-height", 0);
                }
            }
            else {
                $('body').toggleClass("show-megamenu-mobile");
                $('body').toggleClass("overflow-hidden");
                if ($('.fixed-header').hasClass("sticky-header")) {
                    $('.mega-menu-mobile').css("min-height", $(window).height() - $(".fixed-header").height());
                }
                else {
                    $('.mega-menu-mobile').css("min-height", $(window).height() - ($(".header-top").height() + $(".header-middle").height()) );
                }
            }
        });

        // hide Mega menu when click outside
        $('body').on('click', function(event){
            if ( $('.show-megamenu').has(event.target).length === 1 &&  !$('.hamburger-menu, .hamburger-menu > *').is(event.target) && !$('.mega-menu, .mega-menu *').is(event.target) ) {
                $(".hamburger-menu").removeClass("active");
                $('body').removeClass("show-megamenu");
                $('body').removeClass("overflow-hidden");
                $('.mega-menu').css("min-height", 0);
            }
        });

        $('.icons-dropdown-wrapper').on('click', function() {
            $(this).toggleClass('submenu-opened');
            $(this).next().toggleClass('open');
            /* Act on the event */
        });

        /*================= Show - Hide Header When Scroll ( Screen < 1024px) ===================*/
        if($(window).width() <= 1024) {
            var height = $(".header-main").height();
            var lastScroll = 50;
            $(window).on('scroll load', function (event) {
                if ($(window).scrollTop() >= height) {
                    $(".fixed-header").addClass("check");
                }
                else {
                    $(".fixed-header").removeClass("check");
                }

                var st = $(this).scrollTop();
                //if ($(window).scrollTop() > height) {
                if ((st > lastScroll)) {
                    $(".fixed-header").addClass("hidden-header");
                    if ($('.nav-search').hasClass('hide') === false) {
                        $('.nav-search').toggleClass('hide');
                    }
                }
                else {
                    $(".fixed-header").removeClass("hidden-header");
                }
                lastScroll = st;
                //}
            });
        }

    };

    SLZ.mainFunction = function() {

        // label news animation in header
        $('.vticker').easyTicker({
            direction: 'up',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 5000,
            height: 'auto',
            visible: 1,
            mousePause: 0,
            controls: {
                up: '.up',
                down: '.down',
                toggle: '.toggle',
                stopText: 'Stop !!!'
            }
        }).data('easyTicker');

        // slide live score
        $('.slide-live-score .live-scrore-list').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 1,
            speed: 8000,
            arrows: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                         speed: 5000
                    }
                }
            ]
        });

        // close Breaking news on header
        $(".btn-close-breaking-news").on("click", function(){
            $(".breaking-news").css("display","none");
        });


        // js for slider gallery
        function create_SliderWithThumbnail() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 7,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                focusOnSelect: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 381,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        }
        create_SliderWithThumbnail();
        /*reload slick when click on tabs*/
        $('.gallery-slide ul li').click(function(event) {
            /* Act on the event */
            setTimeout(function () {
                $('.slider-for, .slider-nav').slick('unslick');
                create_SliderWithThumbnail();
            },160);
        });

        // style scroll sidebar
        if ($(".sidebar").hasClass("scroll-sidebar")) {
            var height_sidebar_2;
            if( $(".scroll-sidebar .widget").length > 1 ) {
                height_sidebar_2 = $(".scroll-sidebar").prev().height()/3;
            }
            else
                height_sidebar_2 = $(".scroll-sidebar").prev().height();
                
            $(".scroll-sidebar .scroll-sidebar-content").css("height",height_sidebar_2 - 50) ;

            $(".scroll-sidebar .scroll-sidebar-content").mCustomScrollbar({
                    theme:"dark-3",
                    mouseWheel:{ scrollAmount: 300 }
            });
        }

        // slide block news
        $('.slide').slick({
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            fade: true
        });

        // slide for 3 items
        $('.slide-3-wrapper').slick({
            infinite: true,
            speed: 800,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        speed: 600
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        speed: 400,
                        arrows: true,
                    }
                }
            ]
        });

        // slide for 2 items
        $(".slide-2-wrapper").slick({
            infinite: true,
            speed: 600,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        speed: 400
                    }
                }
            ]
        });

        // slide for 4 items
        $(".slide-4-wrapper").slick({
            infinite: true,
            speed: 800,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
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
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        speed: 600
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        speed: 400,
                        arrows: true,
                    }
                }
            ]
        }); 

        // Video page
        $(".block-video-wrapper").slick({
            infinite: true,
            speed: 800,
            // centerPadding: '15%',
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            // centerMode: true,
            responsive: [
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        speed: 400
                    }
                }
            ]
        });

        // slide for 6 items
        $(".slide-6-wrapper").slick({
            infinite: true,
            speed: 800,
            slidesToShow: 6,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 4,
                        speed: 700
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        slidesToShow: 3,
                        speed: 600
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 2,
                        speed: 500,
                    }
                },
                {
                    breakpoint: 381,
                    settings: {
                        slidesToShow: 1,
                        speed: 400,
                        arrows: true
                    }
                }
            ]
        });      

        $('.contact-form input, .contact-form textarea').blur(function() {
            if (!$(this).val()) {
                $(this).removeClass('edited');
            } else {
                $(this).addClass('edited');
            }
        });


        $(".banner-main-3 .layout-list-news .row-wrapper").slick({
            infinite: true,
            speed: 800,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        slidesToShow: 2,
                        speed: 600
                    }
                },
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                        speed: 400
                    }
                }
            ]
        });


        //slick for banner billionaire
        //slick for banner gamer
        $('.banner-main-6 .slide-blog').slick({
            infinite: true,
            speed: 600,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        slidesToShow: 2,
                        speed: 500
                    }
                },
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                        speed: 400
                    }
                }
            ]
        });

        //sticky sidebar
        if($('.sidebar').length > 0 && window.innerWidth > 1024) {
            
            setInterval(function() {
                /*check height of sidebar and their parent*/
                $('.sidebar .sidebar-wrapper').each(function(index, el) {
                    var sidebar = $(this);
                    var height_sidebar,
                        height_content_wrapper,
                        empty_spacing;

                    height_content_wrapper = sidebar.parent().prev().height();
                    height_sidebar = sidebar.height();
                    empty_spacing = height_content_wrapper-height_sidebar;
                    if(empty_spacing <= 0) {
                        sidebar.css('position', 'static');
                    }
                });
            },200);
            
            $('.sidebar .sidebar-wrapper').each(function(index, el) {
                var sidebar = $(this);
                
                var width_sidebar,
                    height_sidebar,
                    height_content_wrapper,
                    empty_spacing;

                var lastScrollTop = 0;

                setTimeout(function() {
                    width_sidebar = sidebar.parent().width();
                },200);

                $(window).scroll(function(){
                    var currentScrollTop = $(this).scrollTop();
                    
                    /*height of menu sticky*/
                    var height_menu_fixed = $('.sticky-header').height();

                    /*offsetTop of main wrapper*/
                    // var offsetTop_main = sidebar.parents('.row').offset().top;
                    var offsetTop_main = sidebar.parent().prev().offset().top;

                    height_content_wrapper = sidebar.parent().prev().height();

                    height_sidebar = sidebar.height();

                    width_sidebar = sidebar.parent().width();

                    /*offsetTop of sidebar wrapper and sidebar*/
                    var offsetTop_sidebar = 0;

                    if( currentScrollTop  <= height_content_wrapper + offsetTop_main) {
                        offsetTop_sidebar = sidebar.offset().top - sidebar.parent().offset().top;

                        /*update empty spacing when height of sidebar is changed*/
                        empty_spacing = height_content_wrapper-height_sidebar;

                        if(empty_spacing > 0) {
                            if (currentScrollTop > lastScrollTop){
                                // Scroll Down
                                /*make sidebar position change from fixed to absolute when scroll down*/
                                if(sidebar.offset().top - $(window).scrollTop() == height_menu_fixed + 20) {
                                    sidebar.css({
                                        'position': 'absolute',
                                        'top': offsetTop_sidebar+'px',
                                        'bottom': 'auto'
                                    });
                                }

                                if(height_sidebar >= window.innerHeight) {
                                    /*keep sidebar fixed when scroll down to the bottom of sidebar*/
                                    if(currentScrollTop >= (height_sidebar + sidebar.offset().top - window.innerHeight) ) {
                                        sidebar.css({
                                            'width': width_sidebar+'px',
                                            'position': 'fixed',
                                            'top': 'auto',
                                            'bottom': 0
                                        });

                                        $(window).on('load', function() {
                                            if(sidebar.offset().top+sidebar.height() > height_content_wrapper) {
                                                empty_spacing = height_content_wrapper-height_sidebar;
                                                sidebar.css({
                                                    'position': 'absolute',
                                                    'top': empty_spacing+'px',
                                                    'bottom': 'auto'
                                                });
                                            }
                                        });
                                    }   
                                }
                                else {
                                    /*keep sidebar fixed when scroll down to the top of sidebar*/
                                    if(currentScrollTop >= (offsetTop_main - height_menu_fixed - 20) ) {
                                        sidebar.css({
                                            'width': width_sidebar+'px',
                                            'position': 'fixed',
                                            'top': height_menu_fixed+20+'px',
                                            'bottom': 'auto'
                                        });
                                    }
                                }

                                /*keep sidebar at the bottom of their parent*/
                                if(height_sidebar + offsetTop_sidebar >= height_content_wrapper ) {
                                    sidebar.css({
                                        'position': 'absolute',
                                        'top': empty_spacing+'px',
                                        'bottom': 'auto'
                                    });
                                } 
                            } else {
                                // Scroll Up
                                if(offsetTop_sidebar !== 0) {
                                    /*make sidebar position absolute when scroll up*/
                                    sidebar.css({
                                        'position': 'absolute',
                                        'top': offsetTop_sidebar+'px',
                                        'bottom': 'auto'
                                    });

                                    /*keep sidebar fixed when scroll up to the top of sidebar*/
                                    if( currentScrollTop <= (sidebar.offset().top - height_menu_fixed) ) {
                                        sidebar.css({
                                            'width': width_sidebar+'px',
                                            'position': 'fixed',
                                            'top': height_menu_fixed+20+'px',
                                            'bottom': 'auto'
                                        });
                                    }
                                    
                                    /*make sidebar original*/
                                    if(offsetTop_sidebar <= 0 ) {
                                        sidebar.css({
                                            'position': 'static',
                                            'top': 'auto',
                                            'bottom': 'auto'
                                        });
                                    } 
                                }
                            }
                        }
                    }
                    
                    lastScrollTop = currentScrollTop;
                    /*keep sidebar at the bottom of their parent in case of pressing button END*/
                    
                    document.addEventListener("keydown", function(event) {
                        height_content_wrapper = sidebar.parent().prev().height();
                        height_sidebar = sidebar.height();
                        empty_spacing = height_content_wrapper-height_sidebar;
                        if(event.which == 35 && empty_spacing > 0) {
                            sidebar.css({
                                'position': 'absolute',
                                'top': empty_spacing+'px',
                                'bottom': 'auto'
                            });
                        }
                    });

                    if(currentScrollTop + $(window).innerHeight() == $(document).innerHeight() && empty_spacing > 0) {
                        sidebar.css({
                            'position': 'absolute',
                            'top': empty_spacing+'px',
                            'bottom': 'auto'
                        });
                    }

                    if(currentScrollTop == 0) {
                        sidebar.css('position', 'static');
                    }
                });
                
            });     
        }

        // Back to top
        if ($('.back-to-top').length) {
            var scrollTrigger = 100; // px
            var backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.back-to-top').addClass('show');
                } else {
                    $('.back-to-top').removeClass('show');
                }
            };
            backToTop();
            $(window).on('scroll', function() {
                backToTop();
            });
            $('.back-to-top').on('click', function(e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }

        $('.single-recent-post-widget .thumb .img-wrapper').each(function(index, el) {
            $(this).parent().css('height', $(this).height());            
        });
    };

    SLZ.weatherFunction = function(){

        $.simpleWeather({
            location: 'NewYork',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather,#weather-mobile").html(html);
            },
            error: function(error) {
                $("#weather,#weather-mobile").html('<p>Weather Error</p>');
            }
        });
    };


    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.headerFunction();
        SLZ.mainFunction();
        SLZ.weatherFunction();
    });

    /*=====  End of INIT FUNCTIONS  ======*/

    $(window).on('load', function() {
        $("html,body").animate({scrollTop: 0}, 1);
        setTimeout(function() {
            $('.sidebar .sidebar-wrapper').css('position', 'static');
        },200)
    });

    $(window).on('resize', function() {
        if(window.innerWidth < 1025) {
            $('.sidebar .sidebar-wrapper').css('position', 'static');
        }
        /* Act on the event */
    });
});
