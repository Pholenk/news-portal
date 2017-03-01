jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.weatherFunction = function(){

        $.simpleWeather({
            location: 'NewYork',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather1").html(html);
            },
            error: function(error) {
                // $("#weather1").html('<p>' + error + '</p>');
            }
        });

        $.simpleWeather({
            location: 'California',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather2").html(html);
            },
            error: function(error) {
                // $("#weather2").html('<p>' + error + '</p>');
            }
        });

        $.simpleWeather({
            location: 'Vancouver',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather3").html(html);
            },
            error: function(error) {
                // $("#weather3").html('<p>' + error + '</p>');
            }
        });

        $.simpleWeather({
            location: 'London',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather4").html(html);
            },
            error: function(error) {
                // $("#weather4").html('<p>' + error + '</p>');
            }
        });

        $.simpleWeather({
            location: 'Austin, TX',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather5").html(html);
            },
            error: function(error) {
                // $("#weather5").html('<p>' + error + '</p>');
            }
        });

        $.simpleWeather({
            location: 'Ho Chi Minh',
            woeid: '',
            unit: 'c',
            success: function(weather) {
                var html = '<div class="today-weather"><i class="icon-weather icon-' + weather.code + '"></i><div class="temp">' + weather.temp + '&deg;</div></div>';
                $("#weather6").html(html);
            },
            error: function(error) {
                // $("#weather4").html('<p>' + error + '</p>');
            }
        });

        $('.header-main.travel .slide-blog').slick({
            infinite: false,
            speed: 600,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 767,
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
    };

    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        SLZ.weatherFunction();
    });

    /*=====  End of INIT FUNCTIONS  ======*/

    $(window).on('resize load', function() {
    });

});
