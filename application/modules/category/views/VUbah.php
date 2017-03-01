<div class="content-wrapper" style="min-height:654px;">
    <section class="contet-header">
        <div class="col-md-12">
            <h3 class="page-header" style="border-color: gray; border-width: 2px;">Kategori</h3>
        </div>
    </section>
    <section class="content">
    <center>
        <div class="col-md-10">
        	<div class="box-header">
                <h2 >Kategori Baru</h2>
            </div>
            <?php foreach($data as $row){?>
            <form action="<?php echo base_url('category/CCategory/Ubah/'.$row->category_id); ?>" class="form-horizontal" method="post">
            	<center>
                <div class="box-body" style="padding-left: 10%;">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label class="pull-right">Nama Kategori</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="inputUname" name="nama" class="form-control" placeholder="Nama Kategori..." required value="<?php echo $row->category_name;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label class="pull-right">Deskripsi Kategori</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="inputFirst" name="deskripsi" class="form-control" placeholder="Deskripsi..." required autofocus value="<?php echo $row->category_desc;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label class="pull-right">Anak Kategori</label>
                        </div>
                        <div class="col-xs-6">
                            <select name="parents" class="form-control">
                                <option value="2">Member</option>
                                <option value="1">Admin</option>
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
            <?php } ?>
        </div>
        </center>
    </section>
</div><!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url(); ?>bootstrap/js/ie10-viewport-bug-workaround.js"></script>
















<head></head>
<body>
<?php
$this->load->helper('form');
echo validation_errors();
foreach ($query as $row):
?>
	<center>
	<form action =""method="post">
	<h3>Tambah Data</h3>
	<table border="0">
	<tr>
	<td>ID Category : </td>
	<td><input type="int" name="idc" value="<?php echo $row->category_id;?>"></td>
	</tr>
	<tr>
	<td>Name Category : </td>
	<td><input type="varchar" name="name" value="<?php echo $row->category_name;?>"></td>
	</tr>
	<tr>
	<td>Desc Category : </td>
	<td><input type="text" name="desc" value="<?php echo $row->category_desc;?>"></td>
	</tr>
	<tr>
	<td>Slug Category : </td>
	<td><input type="varchar" name="slug" value="<?php echo $row->category_slug;?>"></td>
	</tr>
	<tr>
	<td>Parent Category : </td>
	<td><input type="int" name="parent" value="<?php echo $row->category_parent;?>"></td>
	</tr>
	<tr>
	<td>Type Category : </td>
	<td><input type="varchar" name="type" value="<?php echo $row->category_type;?>"></td>
	</tr>
	<tr>
	<td>Lineage Category : </td>
	<td><input type="longtext" name="lineage" value="<?php echo $row->category_lineage;?>"></td>
	</tr>
	<tr>
	<td>Deep Category : </td>
	<td><input type="int" name="deep" value="<?php echo $row->category_deep;?>"></td>
	</tr>
	<tr><td><input type="submit" value="Simpan"/></td></tr>
	</table>
<?php endforeach;?>
</form>
</center>

