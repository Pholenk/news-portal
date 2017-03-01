<head></head>
<body>
<?php
$this->load->helper('form');
echo validation_errors();
foreach ($query as $row):
?>
	<center>
	<form action ="<?php echo base_url('category/CCategory/Ubah/'.$row->category_id)?>"method="post">
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

