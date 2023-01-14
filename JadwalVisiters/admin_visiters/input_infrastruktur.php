<?php 
$perintah=new crud();
$table="tbl_infrastruktur";
@$where="id_infrastruktur = $_GET[id]";
$link="?menu=input_infrastruktur";
@$field=array('id_infrastruktur'=>$_POST['id_infrastruktur'],'infrastruktur'=>$_POST['infrastruktur']);

//pagging
$per_hal=2;
$jumlah_record=mysql_query("SELECT COUNT(*) from tbl_infrastruktur");
@$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;

//


if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
	echo"<script>;document.location.href='$link'</script>";

}
if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
echo"<script>;document.location.href='$link'</script>";
}

if(isset($_GET['edit'])){
	@$edit=$perintah->edit($table,$where);
	
}

if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
	echo"<script>;document.location.href='$link'</script>";
}	


?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<meta charset="utf-8">
<title>Input Infrastruktur</title>
</head>

<body><br>
<form method="post" >
<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>INPUT DATA INFRASTRUKTUR</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Infrastruktur</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Id Otomatis" name="id_infrastruktur" value="<?php echo @$edit['id_infrastruktur'] ?>"></td>
</tr>

<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><input name="infrastruktur" type="text" required class="form-control" id="infrastruktur" placeholder="Masukkan Infrastruktur" value="<?php echo @$edit['infrastruktur'] ?>"></td>
</tr>

<td align="right" colspan="4">
 <?php if (@$_GET['id']==""){ ?>
<input class="btn btn-success" type="submit" name="simpan" value="Save">
<?php }else{?>
<input class="btn btn-success" type="submit" name="ubah" value="Update"> </td>
<?php }?></td>
</tr>
  </tbody>
</table>

<table class="table table-bordered">
<tr class="tr">
<td>No</td>
<td>ID Infrastruktur</td>
<td>Infrastruktur</td>
<td align="center" colspan="2">Aksi</td>
</tr>
<?php
	$no=0;
	$b=$perintah-> tampil("tbl_infrastruktur limit $start, $per_hal");
	if($b==""){?>
   <tr><td align='center' colspan='7' style='color:#00B3FF'>DATA INFRASTRUKTUR KOSONG</td></tr>
    <?php 
	}else{
		foreach($b as $value){
			$no++;
	 ?>
<tr>
<td><?php echo $no?> </td>
<td><?php echo $value['id_infrastruktur']?> </td>    
<td><?php echo $value['infrastruktur'] ?></td>
<td width="100" align="center"><a href="?menu=input_infrastruktur&edit&id=<?php echo @$value['id_infrastruktur'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
	<td width="100" align="center"><a href="?menu=input_infrastruktur&edit&id=<?php echo @$value['id_infrastruktur'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>

</tr>
<?php 
  }}
  ?>
  
<tr>
<td align="center" colspan="11"><a href="?menu=input_infrastruktur&page=<?php echo $page -1 ?>"> Before < </a>
<?php 
 
for($x=1;$x<=$halaman;$x++){
	?>
	<a href=""><?php echo $x ?></a>
	<?php
}
 
?></td> 
  
  <tr align="center" bgcolor="#FFF" style=" color:#000">
<td colspan="11" style="color:#2980b9;">
Jumlah Infrastruktur :
<?php echo $jum
?></td>
</tr>
</table>


</form>
</body>
</html>