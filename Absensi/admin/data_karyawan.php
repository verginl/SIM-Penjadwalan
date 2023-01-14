<?php 
$perintah = new crud();

$table="tbl_karyawan";
@$where="id_karyawan = $_GET[id]";
$link="?menu=karyawan";

@$field=array('id_karyawan'=>$_POST['id_karyawan'],'nama_karyawan'=>$_POST['nama_karyawan'],'username'=>$_POST['username'],'password'=>$_POST['password']);

if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
	echo"<script>;document.location.href='?menu=karyawan'</script>";
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
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css">
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />

<meta charset="utf-8">
<title>Data Karyawan</title>
</head>


<body><br>
<form method="post" >

</table>
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                        <tr class="tr">
                            <th>No</th>
                            <th>ID Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>JK</th>
                            <th>Tanggal Lahir</th>
                             <th>No Handphone</th>
                              <th>Email</th>
                               <th>Username</th>
                               <th>Password</th>
                         
                        </tr>
                    </thead>
 <?php
					$result = mysql_query("SELECT * FROM tbl_karyawan");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id_karyawan']?></td>
                            <td><?php echo $row['nama_karyawan']?></td>
                             <td><?php echo $row['jk']?></td>
                              <td><?php echo $row['tgl_lahir']?></td>
                               <td><?php echo $row['no_hp']?></td>
                              <td><?php echo $row['email']?></td>
                                <td><?php echo $row['username']?></td>
                                 <td><?php echo $row['password']?></td>
</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>
</form>

    </body>
</html>