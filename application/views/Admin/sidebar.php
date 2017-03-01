<aside class="main-sidebar">
  <section class="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: inherit;">
      <ul class="sidebar-menu">
        <li class="header" style="font-color:#ffffff">MENU</li>
        <li class="treeview">
          <a href="#">
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pengguna/CPengguna/register') ?>">Register</a></li>
            <li><a href="<?php echo base_url('pengguna/CPengguna/Tampil')?>">Tampil</a></li>
          </ul>
        </li>
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
        <li class="treeview">
          <a href="#">
            <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('category/CCategory/Tambah');?>">Kategori Baru</a></li>
            <li><a href="<?php echo base_url('category/CCategory');?>">Tampil</a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('contact_us/CContact_us'); ?>">
            <span>Pesan Masuk</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('auth/CAuth/logout'); ?>">
            <span>Log Out</span>
          </a>
        </li>
      </ul><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
  </section>
</aside><!-- /.main-sidebar -->