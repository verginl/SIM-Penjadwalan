<?php
$perintah=new crud();
$table="tbl_problem";
@$where="id_problem = $_GET[id]";
$link="?menu=input_problem_costumer";
@$field=array('id_problem'=>$_POST['id_problem'],'initial_problem'=>$_POST['initial_problem']);

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
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css">
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />

<meta charset="utf-8">
<title>Input Problem</title>
</head>

<body><br>
<form method="post" >
<table id="datatables" class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>INPUT DATA PROBLEM</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Problem</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Id Otomatis" name="id_problem" value="<?php echo @$edit['id_problem'] ?>"></td>
</tr>

<tr>
      <td>Initial Problem</td>
      <td>:</td>
      <td><input name="initial_problem" type="text" required class="form-control" id="initial_problem" placeholder="Masukkan Initial Problem" value="<?php echo @$edit['initial_problem'] ?>"></td>
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
                            <th>ID Problem</th>
                            <th>Initial Problem</th>
                            <th >AKSI</th>
                            <th >AKSI</th>
                        </tr>
                    </thead>

<?php
					$result = mysql_query("SELECT * FROM tbl_problem");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id_problem']?></td>
                            <td><?php echo $row['initial_problem']?></td>
<td width="100" align="center"><a href="?menu=input_problem_costumer&hapus&id=<?php echo $row['id_problem'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
<td width="100" align="center"> <a href="?menu=input_problem_costumer&edit&id=<?php echo $row['id_problem'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>
  </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>


</form>
</body>
</html>