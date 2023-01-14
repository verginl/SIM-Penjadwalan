<?php 

$perintah = new crud();
$table="tbl_karyawan";
@$where="id_karyawan = $_GET[id]";
$link="?menu=karyawan";
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_karyawan where username='$_SESSION[username]'"));
@$field=array('id_karyawan'=>$_POST['id_karyawan'],'nama_karyawan'=>$_POST['nama_karyawan'],'jk'=>$_POST['jk'],'tgl_lahir'=>$_POST['tgl_lahir'],'no_hp'=>$_POST['no_hp'],'email'=>$_POST['email'],'username'=>$_POST['username'],'password'=>$_POST['password']);

if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
	echo"<script>;document.location.href='?menu=karyawan'</script>";
}

if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
}

if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
}	

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />


<meta charset="utf-8">
<title>Data Karyawan</title>
</head>


<body><br>
<form method="post">

<table width="500" class="table table-bordered">
<thead class="tr">
<th colspan="5"><center><h4>Data Diri <?php echo @$tampil['nama_karyawan'] ?></h4></center></Th>
</thead>
</table>
<?php
	
	$b=$perintah-> tampil("tbl_karyawan");

  ?>
    
<table width="500" class="table table-responsive table-bordered">
<tr>
<td>Id Karyawan</td>
<td>:</td>
<td><?php echo @$tampil['id_karyawan'] ?></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><?php echo @$tampil ['nama_karyawan'] ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><?php echo @$tampil['jk'] ?></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><?php echo @$tampil ['tgl_lahir'] ?></td>
</tr>
<tr>
<td>No Handphone</td>
<td>:</td>
<td><?php echo @$tampil ['no_hp'] ?></td>
</tr>
<tr>
<td>E-mail</td>
<td>:</td>
<td><?php echo @$tampil ['email'] ?></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><?php echo @$tampil ['username'] ?></td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td>Hidden Password</td>
</tr>
<tr>
<td colspan="3" align="right" width="50"><a href="?menu=edit_data_diri&edit&id=<?php echo $tampil['id_karyawan']?>">Edit Data Diri</a></td>

</tr>
  

</table>

</form>
</body>
</html>