<?php 
$perintah=new crud();
$table="tbl_report_backbone";
@$where="id_report = $_GET[id]";
$link="?menu=data_report_ts";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_report_backbone"));


?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
<meta charset="utf-8">
<title>Data Report TS</title>
</head>

<body><br>
<form method="post" >
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
<tr>
<th colspan="14"><center>Data Report Backbone Multiple</center></th>
</tr>
<tr class="tr">
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
<th>Waktu</th>
<th>Action</th>
<th>Problem Sulving</th>
<th>Aksi</th>
</tr>
</thead>
                    <?php
					$result = mysql_query("select * from qw_report_backbone");
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
<td><?php echo $row ['waktu'] ?></td>
<td><?php echo $row ['action'] ?></td>
<td><?php echo $row ['problem_sulving'] ?></td>
<td width="100" align="center"> <a href="?menu=ertb&edit&id=<?php echo $row['id_report'] ?>">Edit</a></td>
</tr>
<?php  $no++;  }?>
<tfoot>
<tr>

<td colspan="14" align="right"><a href="export_backbone.php">Export Excel</a></td>
</tr>
</tfoot>
	
        </div><!-- /.box-body -->
        </div>	
</table>
</form>
</body>
</html>