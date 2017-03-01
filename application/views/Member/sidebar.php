<aside class="main-sidebar">
  <section class="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 655px">
      <ul class="sidebar-menu">
        <a href="<?php echo base_url(); ?>pengguna/CPengguna"><li class="header">MENU</li></a>
        <li class="treeview">
          <a href="#">
            <span>Posting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('posting/CPosting/Tambah')?>">Post Baru</a></li>
            <li><a href="<?php echo base_url('posting/CPosting/Tampil')?>">Tampil</a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('pengguna/CPengguna/logout'); ?>">
            <span>Log Out</span>
          </a>
        </li>
      </ul><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
  </section>
</aside><!-- /.main-sidebar -->