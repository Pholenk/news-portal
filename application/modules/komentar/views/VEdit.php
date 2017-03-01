<head></head>
<body>
<?php
$this->load->helper('form');
echo validation_errors();
foreach ($query as $row):
?>
	<center>
	<form action ="<?php echo base_url('komentar/CKomentar/Ubah/'.$row->feed_id)?>" method="post">
	<h3>Komentar</h3>
	<table border="0">
	<tr>
	<td>Komentar : </td>
	<td><input type="text" name="comments" value="<?php echo $row->feed_content;?>"></td>
	</tr>
	<tr><td><input type="submit" value="Simpan"/></td></tr>
	</table>
<?php endforeach;?>
</form>
</center>
</body>
