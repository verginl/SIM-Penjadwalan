<?php

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data-report-multiple-backbone-ts.xls");
 
// Tambahkan table

 ?>
<?php 
include"../../Library/koneksi.php";
$perintah=new crud();
$perintah->koneksi();
$table="tbl_report_backbone";
@$where="id_report = $_GET[id]";
@$where2="id_karyawan = $_GET[idk]";
$link="?menu=data_report_ts";
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_report_backbone where id_karyawan='$_GET[id_karyawan]'"));

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Data Report TS</title>
</head>

<body><br>
<form method="post" >

<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%" border="1">

<thead>
    		<tr>
        		<Th   colspan="12"><center>Data Report Multiple <?php echo $tampil['nama_karyawan'] ?></center></Th>
        	</tr>
<tr style="color:#FFFFFF;" bgcolor="#0D89EF">
<th>No</th>
<th>Subjek Email</th>
<th>Tanggal</th>
<th>Area</th>
<th>Initial Problem</th>
<th>Infrastruktur</th>
<th>Level</th>
<th>Sub Area</th>
<th>ID Tiket</th>
<th>Nama TS</th>
<th>Nama Partner</th>
<th>Waktu</th>
<th>Action</th>
<th>Problem Sulving</th>
</tr>
</thead>
                    <?php
					$result = mysql_query("select * from qw_report_backbone where id_karyawan='$_GET[idk]'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr>
<td><?php echo $no?> </td>
<td><?php echo $row['subjek_email']?> </td>    
<td><?php echo $row['tgl_visit']?> </td>    
<td><?php echo $row['area'] ?></td>
<td><?php echo $row ['initial_problem_backbone'] ?></td>
<td><?php echo $row ['infrastruktur'] ?></td>
<td><?php echo $row ['level'] ?></td>
<td><?php echo $row ['sub_area'] ?></td>
<td><?php echo $row ['id_tiketbackbone'] ?></td>
<td><?php echo $row ['nama_karyawan'] ?></td>
<td><?php echo $row ['nama_partner'] ?></td>
<td><?php echo $row ['waktu'] ?></td>
<td><?php echo $row ['action'] ?></td>
<td><?php echo $row ['problem_sulving'] ?></td>
</tr>
<?php  $no++;  }?>	
        </div><!-- /.box-body -->
        </div>	
</table>
</form>
</body>
</html>