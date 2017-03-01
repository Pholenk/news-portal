        <!-- LIBRARY JS-->
        <script src="<?php echo base_url(); ?>/swlabs.co/assets/libs/jquery/jquery-2.2.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/swlabs.co/assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/swlabs.co/assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/slick-slider/slick.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/easy-ticker/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/easy-ticker/jquery.easy-ticker.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/custom-scroll/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/isotope/fit-columns.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/weather/jquery.simpleWeather.min.js"></script>
        <!-- MAIN JS-->
        <script src="<?php echo base_url(); ?>swlabs.co/assets/js/main.js">
        </script>
        <script>
             $(window).on('load', function() 
             {
                $.ajax(
                {
                    url:"<?php echo base_url('auth/CAuth/is_login');?>",
                    success: function(msg)
                    {
                        if(msg=="TRUE")
                        {
                            $("#form-comment").removeClass("hide");
                        }
                    }
                });
            });
        </script>
        <!-- LOADING SCRIPTS FOR PAGE-->
        <script src="<?php echo base_url(); ?>swlabs.co/assets/js/pages/news.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/js/pages/blog.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/libs/chart/chart.min.js"></script>
        <script src="<?php echo base_url(); ?>swlabs.co/assets/js/pages/chart.js"></script>
    </body>
</html>