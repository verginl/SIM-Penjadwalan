<?php 
$perintah=new crud();
$table="tbl_area";
@$where="id_area = $_GET[id]";
$link="?menu=area";
@$field=array('id_area'=>$_POST['id_area'],'area'=>$_POST['area']);

//pagging
$per_hal=2;
$jumlah_record=mysql_query("SELECT COUNT(*) from tbl_area");
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
<title>Input Area</title>
</head>

<body><br>
<form method="post" >
<table class="table" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>INPUT DATA AREA</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Area</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Id Otomatis" name="id_area" value="<?php echo @$edit['id_area'] ?>"></td>
</tr>

<tr>
      <td>Area</td>
      <td>:</td>
      <td><input name="area" type="text" required class="form-control" id="area" placeholder="Masukkan Area" value="<?php echo @$edit['area'] ?>"></td>
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
<td>Id Area</td>
<td>Area</td>
<td align="center" colspan="2">Aksi</td>
</tr>
<?php
	$no=0;
	$b=$perintah-> tampil("tbl_area limit $start, $per_hal");
	if($b==""){?>
   <tr><td align='center' colspan='7' style='color:#00B3FF'>DATA AREA KOSONG</td></tr>
    <?php 
	}else{
		foreach($b as $value){
			$no++;
	 ?>
<tr>
<td><?php echo $no?> </td>
<td><?php echo $value['id_area']?> </td>    
<td><?php echo $value['area'] ?></td>
<td width="100" align="center"><a href="?menu=input_area&hapus&id=<?php echo $value['id_area'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
	<td width="100" align="center"> <a href="?menu=input_area&edit&id=<?php echo $value['id_area'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>

</tr>
<?php 
  }}
  ?>
  
<tr>
<td align="center" colspan="11"><a href=""> Before < </a>
<?php 
 
for($x=1;$x<=$halaman;$x++){
	?>
	<a href=""><?php echo $x ?></a>
	<?php
}
 
?></td> 
  
  <tr align="center" bgcolor="#FFF" style=" color:#000">
<td colspan="11" style="color:#2980b9;">
Jumlah Area :
<?php echo $jum
?></td>
</tr>
</table>


</form>
</body>
</html>