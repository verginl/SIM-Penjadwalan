<?php 
$perintah=new crud();
$table="tbl_area";
@$where="id_area = $_GET[id]";
$link="?menu=area";
@$field=array('id_area'=>$_POST['id_area'],'area'=>$_POST['area']);


if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);

}
if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);

}

if(isset($_GET['edit'])){
	@$edit=$perintah->edit($table,$where);
	
}

if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
}	


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Input Area</title>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css">
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />

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
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                        <tr class="tr">
                            <th>No</th>
                            <th>ID Area</th>
                            <th>Area</th>
                            <th >AKSI</th>
                            <th >AKSI</th>
                        </tr>
                    </thead>
 <?php
					$result = mysql_query("SELECT * FROM tbl_area");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id_area']?></td>
                            <td><?php echo $row['area']?></td>
<td width="100" align="center"><a href="?menu=input_area&hapus&id=<?php echo $row['id_area'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
	<td width="100" align="center"> <a href="?menu=input_area&edit&id=<?php echo $row['id_area'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>

 </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
                </table>
</form>
</body>
</html>