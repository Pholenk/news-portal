<div class="content-wrapper" style="min-height:654px;">
    <div class="col-xs-12">
        <h3 class="page-header" style="border-color: gray; border-width: 2px;">Pengguna</h3>
    </div>
    <div class="col-xs-12">
        <h2 style="text-align: center; margin-top:0px; margin-bottom:20px;">Edit Posting</h2>
        <?php foreach($query as $row): ?>
        <form name="berkas" action="<?php echo base_url('posting/CPosting/Ubah/'.$row->post_id); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="col-md-6 col-xs-12">
                <div class="form-group col-xs-12 pull-right">
                    <div class="col-xs-2">
                        <label class="pull-right">Judul</label>
                    </div>
                    <div class="col-xs-10">
                        <input type="text" id="inputUname" name="judul" class="form-control" value="<?php echo $row->post_title; ?>" placeholder="Judul..." required autofocus>
                    </div>
                </div>
                <div class="form-group col-xs-12 pull-right">
                    <div class="col-xs-2">
                        <label class="pull-right">Kategori</label>
                    </div>
                    <div class="col-xs-10">
                        <select name="kategori" class="form-control">
                            <?php foreach ($query1 as $row1): ?>
                                <option value="<?php echo $row1->category_id; ?>"><?php echo $row1->category_name;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-xs-12 pull-right">
                    <div class="col-xs-2">
                        <label class="pull-right">Konten</label>
                    </div>
                    <div class="col-xs-10">
                        <textarea id="editor1" name="konten" class="form-control pull-left" placeholder="Konten..." required autofocus><?php echo $row->post_content; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group col-xs-12 pull-right">
                    <div class="col-xs-2">
                        <label class="pull-right">Status</label>
                    </div>
                    <div class="col-xs-10">
                        <select id="inputFirst" name="status" class="form-control" autofocus>
                            <option value="">Publish</option>
                            <option value="">Draft</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-xs-12 pull-right">
                    <div class="col-xs-2">
                        <label class="pull-right">Gambar</label>
                    </div>
                    <div class="col-xs-10">
                        <input type="file" class="" name="gambar" accept="image/*">
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-xs-10">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    </div>
                    <div class="col-xs-6">
                        <button type="reset" class="btn btn-warning">Batal</button>
                    </div>
                </div>
            </div>
        </form>
    </div><!-- /container -->
</div>
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