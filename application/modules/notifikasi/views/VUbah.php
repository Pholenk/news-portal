<head></head>
<body>
<?php
$this->load->helper('form');
echo validation_errors();
foreach ($query as $row):
?>
	<center>
	<form action ="<?php echo base_url('notification/CNotification/Ubah/'.$row->notification_id)?>"method="post">
	<h3>Tambah Data</h3>
	<table border="0">
	<tr>
	<td>Type : </td>
	<td><input type="text" name="type" value="<?php echo $row->notification_type;?>"></td>
	</tr>
	<tr>
	<td>User :</td>
	<td><input type="text" name="user" value="<?php echo $row->notification_user;?>"></td>
	</tr>
	<tr>
	<td>parent :</td>
	<td><input type="text" name="parent" value="<?php echo $row->notification_parent;?>"></td>
	</tr>
	<tr>
	<td>Desc :</td>
	<td><input type="text" name="desc" value="<?php echo $row->notification_desc;?>"></td>
	</tr>
	<tr>
	<td>Status :</td>
	<td><input type="text" name="status" value="<?php echo $row->notification_status;?>"></td>
	</tr>
	<tr>
	<td>Icon :</td>
	<td><input type="text" name="icon" value="<?php echo $row->notification_icon;?>"></td>
	</tr>
	<tr>
	<td>Date :</td>
	<td><input type="date" name="tgl" value="<?php echo $row->notification_date;?>"></td>
	</tr>
	<tr><td><input type="submit" value="Simpan"/></td></tr>
	</table>
<?php endforeach;?>
</form>
</center>
</body>