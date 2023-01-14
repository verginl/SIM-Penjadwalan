<?php 
$perintah=new crud();
$table="tbl_admin";
 $edit = mysql_query("SELECT * FROM tbl_admin WHERE username='$_GET[id]'");
    $r    = mysql_fetch_array($edit);
 // Apabila password tidak diubah
  if (isset($_POST['ubah'])){
  if (empty($_POST['password'])) {
    @mysql_query("UPDATE tbl_admin SET username      = '$_POST[username]'
                           WHERE username      = '$_POST[username]'");
  }
  // Apabila password diubah
  else{
    $pass=md5($_POST['password']);
    mysql_query("UPDATE tbl_admin SET username= '$_POST[username]',
                                 password     = '$pass'
                           WHERE username      = '$_POST[username]'");
		echo"Password Terubah";
  }}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/vergi.css">
<link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">

<meta charset="utf-8">
<title>Ubah Password</title>
</head>

<body><br>
<form method="post">
<input type="hidden" name="id" value="<?php $r['username'] ?>">
<table class="table" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>Ubah Password</h4></center></Th>
        	</tr>
        </thead>
<tr>
      <td>Username</td>
      <td>:</td>
      <td><input type="text" class="form-control" required placeholder="Masukkan Username" name="username" readonly = "readonly" value="<?php echo @$r['username'] ?>"></td>
</tr>
<tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="text" class="form-control" placeholder="Masukkan Password" name="password" ></td>
</tr>
<tr><td></td><td></td>
<td align="right">
<input class="btn btn-success" type="submit" name="ubah" value="Update"> 
</td>
</tr>
</tbody>
</table>
</form>

</body>
</html>