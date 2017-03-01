<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- notifikasi -->
<script>
    $(document).ready(function()
    {
        $("#ntf").click(function()
        {
            $.ajax(
            {
                url:"<?php echo base_url('notifikasi/CNotifikasi/Edit');?>",
                success: function(msg)
                {
                    $("span.label.label-warning").html(msg);
                }
            });
        });
    });
</script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>AdminLTE/dist/js/demo.js"></script>
<!-- </div> -->
</body>
</html>
