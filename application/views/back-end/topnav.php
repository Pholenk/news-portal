<header class="main-header">
  <a href="<?php echo base_url('pengguna/CPengguna'); ?>" class="logo"><b>Admin</b>LTE</a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
    <div class="navbar-custom-menu" style="margin-right:3%">
      <ul class="nav navbar-nav">
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope"></i>
            <span class="label label-danger"><?php /*echo $kontak;*/ ?></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <ul class="menu">
                <?php $d= $this->MNotifikasi->get(); foreach ($d as $row): ?>
                  <li >
                    <a style="padding-left:5%;padding-top:1%;padding-bottom:1%;">
                      <h4 style="margin-top:2%;margin-bottom:2%;">
                        <b style="font-size:medium">
                          <?php echo $row->notification_user; ?>
                        </b>
                      </h4>
                      <p><?php echo $row->notification_desc; ?></p>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li class="footer">
              <a href="#">Lihat Semua</a>
            </li>
          </ul>
        </li>
        <li class="dropdown notifications-menu" id="ntf">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="label label-warning" id="notif"><?php $n = $this->MNotifikasi->get_select(); if($n != 0){echo $n;} ?></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <ul class="menu">
                <?php $d= $this->MNotifikasi->get(); foreach ($d as $row): ?>
                  <li >
                    <a style="padding-left:5%;padding-top:1%;padding-bottom:1%;padding-right:1%;">
                      <h4 style="margin-top:2%;margin-bottom:2%;">
                        <b style="font-size:medium">
                          <?php echo $row->notification_user; ?>
                        </b>
                      </h4>
                      <p><?php echo $row->notification_desc; ?></p>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li class="footer">
              <a href="#">Lihat Semua</a>
            </li>
          </ul>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
            <span class="hidden-xs"><b><?php echo $this->session->userdata('username'); ?></b></span>
          </a>
          <ul class="dropdown-menu" style="overflow:hidden;width:auto">
            <div class="user-footer">
              <a href="<?php echo base_url('Auth/CAuth/logout'); ?>">
                <span class="btn btn-flat btn-danger">Keluar ?</span>
              </a>
            </div>
          </ul>
        </li>
      </ul><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
