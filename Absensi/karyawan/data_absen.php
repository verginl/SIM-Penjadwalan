<?php 

$perintah = new crud();
$table="qw_absen_detail";
@$where="id_karyawan = $_GET[id]";
$link="?menu=absen";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_absen_detail where username='$_SESSION[username]'"));

@$field=array('id_karyawan'=>$_POST['id_karyawan'],'nama_karyawan'=>$_POST['nama_karyawan'],'jadwal_masuk'=>$_POST['jadwal_masuk'],'tgl_absen'=>$_POST['tgl_absen'],'jam_absen'=>$_POST['jam_absen']);

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
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
<meta charset="utf-8">
<title>Data Karyawan</title>
</head>

<body><br>
<form method="post" >


<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                        <tr class="tr">
<th>No</th>
<th>Full Name</th>
<th>Jadwal Masuk</th>
<th>Tanggal Absen</th>
<th>Jam Absen</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("select * from qw_absen_detail where username = '$_SESSION[username]' AND tgl_absen GROUP BY tgl_absen");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
<td><?php echo $no?> </td>    
<td><?php echo $row['nama_karyawan'] ?></td>
<td><?php echo $row['jadwal_masuk'] ?></td>
<td><?php echo $row['tgl_absen'] ?></td>
<td><?php echo $row['jam_Absen'] ?></td>
            
                        </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>
</form>
</body>
</html>