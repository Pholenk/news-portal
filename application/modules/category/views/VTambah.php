<div class="content-wrapper" style="min-height:654px;">
    <section class="contet-header">
        <div class="col-md-12">
            <h3 class="page-header" style="border-color: gray; border-width: 2px;">Kategori</h3>
        </div>
    </section>
    <section class="content">
    <center>
        <div class="col-md-10">
            <!-- <div class="box box-primary"> -->
                <div class="box-header">
                    <h2 >Kategori Baru</h2>
                </div>
                <form action="<?php echo base_url('category/CCategory/Tambah') ?>" class="form-horizontal" method="post">
                	<center>
                    <div class="box-body" style="padding-left: 10%;">
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Nama Kategori</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputUname" name="nama" class="form-control" placeholder="Nama Kategori..." required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Deskripsi Kategori</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" id="inputFirst" name="deskripsi" class="form-control" placeholder="Deskripsi..." required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label class="pull-right">Anak Kategori</label>
                            </div>
                            <div class="col-xs-6">
                                <select name="parents" class="form-control">
                                	<option value="0">NONE</option>
                                	<?php foreach ($query as $row){ ?>
                                    <option value="<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
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