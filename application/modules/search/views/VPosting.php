<div class="content-wrapper" style="min-height:1048px;">
    <div class="col-md-12">
        <h3 class="page-header" style="border-color: gray; border-width: 2px;">Pengguna</h3>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <h2  style="text-align: center; margin-top:0px; margin-bottom:20px;">Posting Baru</h2>
        <form action="<?php echo base_url('search/CSearch/Cari'); ?>" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-xs-4">
                    <label class="pull-right">Judul</label>
                </div>
                <div class="col-xs-6">
                    <input type="text" id="inputJudul" name="data" class="form-control" placeholder="Judul..." required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-4">
                    <label class="pull-right">Kategori</label>
                </div>
                <div class="col-xs-6">
                    <select id="inputKategori" name="kategori" class="form-control">
                    	<?php //foreach ($query1 as $row1): ?>
                            <option value="<?php echo $row1->category_id; ?>"><?php //echo $row1->category_name;?></option>
                        <?php //endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-4">
                    <label class="pull-right">Konten</label>
                </div>
                <div class="col-xs-6">
                    <textarea id="editor1" name="konten" class="form-control" placeholder="Konten..." required autofocus></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-4">
                    <label class="pull-right">Image</label>
                </div>
                <div class="col-xs-6">
               <select id ="inputimage" name ="image" class="form-control">
                </select>
                </div>
            </div>
            <div class="form-group">
            	<div class="col-xs-4">
                    <label class="pull-right">Status</label>
                </div>
                <div class="col-xs-6">
                	<select id="inputStatus" name="status" class="form-control" required autofocus>
                    	<option>Publish</option>
                    	<option>Draft</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                </div>
                <div class="col-xs-6">
                    <button type="reset" class="btn btn-warning">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div><!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url(); ?>bootstrap/js/ie10-viewport-bug-workaround.js"></script>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- ckeditor load -->
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
<!-- ckeditor replaced textarea -->
<script>$(function(){
    CKEDITOR.replace('editor1');
    });
</script>