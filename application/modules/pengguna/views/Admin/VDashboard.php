<div class="content-wrapper" style="min-height:654px;">
  <div class="col-lg-12">
      <section class="contet-header">
        <h1 class="with-border">Dashboard</h1>
      </section>
  </div>

  <div class="row">
    <div class="row">
      <div class="col-md-5 col-xs-5" style="margin-left: 25%;">
        <img class="img-circle" src="<?php echo base_url(); ?>AdminLTE/dist/img/colapse 2453.jpg" style="margin-left: 45%;">
      </div>
    </div>
    <div class="row col-md-12">
      <section class="content">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
          <div class="info-box" style="background-color: #35ffa5;">
            <a href="<?php echo base_url('pengguna/CPengguna/Tampil')?>">
              <span class="info-box-icon bg-green">
                <i class="fa fa-users"></i>
              </span>
              <span class="info-box-content info-box-number" style="border-bottom:5px solid #00a65a;">
                <h2 style="color:#fff;word-wrap:break-word;line-height: 76%;">Pengguna</h2>
              </span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
          <div class="info-box" style="background-color:#5edfff;">
            <a href="<?php echo base_url('posting/CPosting/Tampil')?>">
              <span class="info-box-icon bg-aqua">
                <i class="fa fa-newspaper-o"></i>
              </span>
              <span class="info-box-content info-box-number" style="border-bottom:5px solid #00c0ef">
                <h2 style="color:#fff; line-height: 76%; word-wrap:break-word;">Berita</h2>
              </span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
          <div class="info-box" style="background-color:#f8c672;">
            <a href="<?php echo base_url('category/CCategory'); ?>">
              <span class="info-box-icon bg-yellow">
                <i class="fa fa-list"></i>
              </span>
              <span class="info-box-content info-box-number" style="border-bottom:5px solid #f39c12">
                <h2 style="color:#fff; line-height: 76%; word-wrap:break-word;">Kategori</h2>
              </span>
            </a>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>