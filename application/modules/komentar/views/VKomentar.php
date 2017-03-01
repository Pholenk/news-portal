<html>
<head></head>
<body>
<?php
$this->load->helper('form');
echo validation_errors();

?>
	<center>
	<form action ="<?php echo base_url('komentar/CKomentar/Tambah')?>" method="post">
	<h3>Komentar</h3>
	<table border="0">
	<tr>
	<td>Komentar : </td>
	<td><input type="enum" name="comments"></td>
	</tr>
	<tr><td><input type="submit" value="Simpan"/></td></tr>
	
	</table>
</form>
<a href="Tampil">Tampil</a>
</center>
</body>
</html>