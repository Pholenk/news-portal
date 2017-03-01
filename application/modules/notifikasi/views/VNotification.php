<html>
<head></head>
<body>
<?php
$this->load->helper('form');
echo validation_errors();

?>
  <center>
  <form action ="<?php echo base_url('notification/CNotification/Tambah') ?>" method="post">
  <h3>Tambah Data</h3>
  <table border="0">
  <tr>
  <td>Type : </td>
  <td><input type="varchar" name="type"></td>
  </tr>
  <tr>
  <td>User : </td>
  <td><input type="bigint" name="user"></td>
  </tr>
  <tr>
  <td>Parent : </td>
  <td><input type="bigint" name="parent"></td>
  </tr>
  <tr>
  <td>Desc : </td>
  <td><input type="tinytext" name="desc"></td>
  </tr>
  <tr>
  <td>Status : </td>
  <td><input type="enum" name="status"></td>
  </tr>
  <tr>
  <td>Icon : </td>
  <td><input type="varchar" name="icon"></td>
  </tr>
  <tr>
  <td>Date : </td>
  <td><input type="date" name="date"></td>
  </tr>
  
  <tr><td><input type="submit" value="Simpan"/></td></tr>
  </table>
  </form>
  <a href="CNotifikasi/Tampil">Tampil</a>
  </center>
  </body>
</html>
