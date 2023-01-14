<?php
$perintah=new crud();
$table="tbl_infrastruktur";
@$where="id_infrastruktur = $_GET[id]";
$link="?menu=input_infrastruktur";
@$field=array('id_infrastruktur'=>$_POST['id_infrastruktur'],'infrastruktur'=>$_POST['infrastruktur']);



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

<html>
    <head>
        <title>Input Infrastruktur</title>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css">
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />

    
    </head>
    <body>
<form method="post">
<table class="table table-responsive" width="100%">
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
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                        <tr class="tr">
                            <th>No</th>
                            <th>ID Infrastruktur</th>
                            <th>Infastruktur</th>
                            <th >AKSI</th>
                            <th >AKSI</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("SELECT * FROM tbl_infrastruktur");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id_infrastruktur']?></td>
                            <td><?php echo $row['infrastruktur']?></td>
                            <td width="100" align="center"><a href="?menu=input_infrastruktur&hapus&id=<?php echo @$row['id_infrastruktur'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
							<td width="100" align="center"><a href="?menu=input_infrastruktur&edit&id=<?php echo @$row['id_infrastruktur'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>
            
                        </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>
</form>
    </body>
</html>