<?php
$perintah=new crud();
$table="tbl_charge";
@$where="id_charge = $_GET[id]";
$link="?menu=input_charge";
@$field=array('id_charge'=>$_POST['id_charge'],'charge'=>$_POST['charge']);



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
        <title>Input charge</title>
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
        		<Th  colspan="4"><center><h4>INPUT DATA CHARGE</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Charge</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Id Otomatis" name="id_charge" value="<?php echo @$edit['id_charge'] ?>"></td>
</tr>

<tr>
      <td>Charge</td>
      <td>:</td>
      <td><input name="charge" type="text" required class="form-control" id="charge" placeholder="Masukkan Infrastruktur" value="<?php echo @$edit['charge'] ?>"></td>
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
                            <th>ID Charge</th>
                            <th>Charge</th>
                            <th >AKSI</th>
                            <th >AKSI</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("SELECT * FROM tbl_charge");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id_charge']?></td>
                            <td><?php echo $row['charge']?></td>
                            <td width="100" align="center"><a href="?menu=input_charge&hapus&id=<?php echo @$row['id_charge'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
							<td width="100" align="center"><a href="?menu=input_charge&edit&id=<?php echo @$row['id_charge'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>
            
            
                        </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>
</form>
    </body>
</html>