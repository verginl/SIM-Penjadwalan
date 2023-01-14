<?php 

$perintah = new crud();
$table="qw_absen";
@$where="id_karyawan = $_GET[id]";
$link="?menu=absen";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_request_visit"));

@$field=array('id_tiketrequestvisit'=>$_POST['id_tiketrequestvisit'],'no_tiket'=>$_POST['nama_pelanggan'],'alamat'=>$_POST
['alamat'],'infrastruktur'=>$_POST['infrastruktur'],'problem'=>$_POST['problem'],'area'=>$_POST['area']);

if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
	echo"<script>;document.location.href='?menu=admin_visiters'</script>";
}

if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
}

if(isset($_POST['edit'])){
	@$edit=$perintah->edit($table,$where);
}

if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
}	

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<meta charset="utf-8">
<title>Data Listrequest visit</title>
</head>

<body><br>
<form method="post" >

<table class="table table-bordered">
<thead>
    		<tr class="">
        		<Th  colspan="12"><center>
        		  <h4>Data List Request Visit TS</h4></center></Th>
        	</tr>
        </thead>
<tr class="tr">
<td>No</td>
<td>ID Tiket</td>
<td>Nama pelanggan</td>
<td>Alamat</td>
<td>PIC</td>
<td>Infrastruktur</td>
<td>Problem</td>
<td>Area</td>
<Td align="center">Action</Td>

</tr>

<?php
	$no=0;
	@$b=$perintah-> tampil("qw_list_request_visit");
	if($b==""){?>
   <tr><td align='center' colspan='12' style='color:#2980b9'>Data Absen Kosong</td></tr>
    <?php 
	}else{
		foreach($b as $value){
			$no++;
	 ?>
<tr>
<td><?php echo $no?> </td>
<td><?php echo $value['id_tiketrequestvisit']?> </td>    
<td><?php echo $value['nama_pelanggan'] ?></td>
<td><?php echo $value['alamat'] ?></td>
<td><?php echo $value['pic'] ?></td>
<td><?php echo $value['infrastruktur'] ?></td>
<td><?php echo $value['problem'] ?></td>
<td><?php echo $value['area'] ?></td>
<td width="100" align="center"> <a href="?menu=send_request_visit&edit&id=<?php echo $value['id_tiketrequestvisit']?>">GO</a></td>
</tr>
<?php 
  }}
  ?>
  <tr align="center" bgcolor="#FFF" style=" color:#000">
<td colspan="9" style="color:#2980b9;">
NB : Berikut adalah Data Listrequest Visit
<?php
//$rws= mysql_query("select count (username) as jumlah from qw_absen where id_karyawan = '$_SESSION[username]]");
//@$yes= mysql_fetch_array($rws);
//echo $yes ['jumlah']?></td>
</tr>
</table>
</form>
</body>
</html>