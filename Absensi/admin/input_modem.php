<?php
$perintah=new crud();
$table="tbl_modem";
@$where="id_modem = $_GET[id]";
$link="?menu=home";
@$field=array('id_modem'=>$_POST['id_modem'],'nama_modem'=>$_POST['nama_modem']);



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
        <title>Input Modem</title>
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
        		<Th  colspan="4"><center><h4>INPUT DATA MODEM</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Modem</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Id Otomatis" name="id_modem" value="<?php echo @$edit['id_modem'] ?>"></td>
</tr>

<tr>
      <td>Modem</td>
      <td>:</td>
      <td><input name="modem" type="text" required class="form-control" id="modem" placeholder="Masukkan Infrastruktur" value="<?php echo @$edit['nama_modem'] ?>"></td>
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
                            <th>ID Modem</th>
                            <th>Modem</th>
                            <th >AKSI</th>
                            <th >AKSI</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("SELECT * FROM tbl_modem");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id_modem']?></td>
                            <td><?php echo $row['nama_modem']?></td>
                            <td align="center" width="39"><a onclick="retrun confrim('Hapus Data')"; href="?menu=input_modem&hapus&id=<?php echo $row['id_modem']?>"><img src="../../../Penggajian Karyawan/CssHal/Image/DeleteRed.png" height="30" width="30"/></a></td>
    <td align="center" width="24"><a href="?menu=input_modem&edit&id=<?php echo $row['id_modem']?>">edit</a></td>
                        </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>
</form>
    </body>
</html>