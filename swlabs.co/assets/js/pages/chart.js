jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/
    
    SLZ.mainFunction = function() {
        if($('.list-charts-wrapper').length > 0) {
            var randomScalingFactor = function() {
                return Math.round(Math.random() * 100);
                //return 0;
            };
            for (var i = 1; i <= 5; i++) {
                var ct = $('#myChart-'+i);
                var ctOption = {
                    scales: {
                        yAxes: [{
                            display: false
                        }],
                        xAxes: [{
                            gridLines: {
                                display: false
                            },
                            display: false
                        }]
                    },
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                };
                var draw_ct = new Chart(ct, {
                    type: 'line',
                    data: {
                        labels: ["", "", "", "", "", "", ""],
                        datasets: [{
                            data: [randomScalingFactor(), randomScalingFactor(), 
                                    randomScalingFactor(), randomScalingFactor(), 
                                    randomScalingFactor(), randomScalingFactor(),
                                    randomScalingFactor()],
                            backgroundColor: '#FFF',
                            borderColor: '#000',
                            pointRadius: 0,
                            lineTension: 0,
                            // borderWidth: 1,
                        }]
                    },
                    options: ctOption
                });
            }

            $('.list-charts-wrapper').slick({
                infinite: false,
                speed: 800,
                slidesToShow: 5,
                slidesToScroll: 5,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 601,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 420,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
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