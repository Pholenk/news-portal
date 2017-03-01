<div class="content-wrapper" style="min-height:654px;">
    <section class="contet-header">
        <div class="col-md-12">
            <h3 class="page-header" style="border-color: gray; border-width: 2px;">Pengguna</h3>
        </div>
    </section>
    <section class="content">
    <center>
        <div class="col-md-10">
            <!-- <div class="box box-primary"> -->
                <div class="box-header">
                    <h2 >Register Pengguna</h2>
                </div>
                <form action="<?php echo base_url('pengguna/CPengguna/register') ?>" class="form-horizontal" method="post">
                	<center>
                    <div class="box-body" style="padding-left: 10%;">
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Username</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputUname" name="uname" class="form-control" placeholder="Username" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">First Name</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputFirst" name="first" class="form-control" placeholder="First Name" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Last Name</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputLast" name="last" class="form-control" placeholder="Last Name" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Password</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Company</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputLast" name="company" class="form-control" placeholder="Company" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Phone</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputLast" name="phone" class="form-control" placeholder="Phone" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Email</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputLast" name="email" class="form-control" placeholder="Email" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary pull-right">Register</button>
                    </div>
                    <div class="col-xs-6">
                        <button type="reset" class="btn btn-warning">Cancel</button>
                    </div>
                    </center>
                </form>
            <!-- </div> -->
        </div>
        </center>
    </section>
</div><!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url(); ?>bootstrap/js/ie10-viewport-bug-workaround.js"></script>