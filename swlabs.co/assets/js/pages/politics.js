jQuery(function($) {
    "use strict";

    var SLZ = window.SLZ || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/

    SLZ.mainFunction = function() {
        $('.candidate-list .team-inner').each(function(index, el) {
            $(this).find('.progress-bar').width($(this).find('.progress-bar').attr('aria-valuenow')+'%');
        });
        $('.news-masonry').isotope({
            itemSelector: '.block-item-wrapper',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth: '.item-width-1',
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
