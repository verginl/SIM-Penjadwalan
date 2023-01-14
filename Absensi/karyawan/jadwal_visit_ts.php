<?php 

$perintah = new crud();
$query="qw_send_costumer";
@$where="id_tiketrequestvisit = $_GET[id]";
$link="?menu=jadwal_request_visit";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_send_costumer where username='$_SESSION[username]'"));



?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
<meta charset="utf-8">
<title>Data Jadwal Visit TS</title>
</head>

<body><br>
<form method="post" >


<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
<tr class="tr">
<th>No</th>
<th>Nomor Tiket</th>
<th>Nama Costumer</th>
<th>Alamat</th>
<th>PIC</th>
<th>Infrastruktur</th>
<th>Initial Problem</th>
<th>Area</th>
<th>Service</th>
<th>Tanggal Visit</th>
<th>Status</th>
<th>Note</th>
<th>Nama TS</th>
<th>Nama Partner</th>
<th>Jam Berangkat</th>
<td>Aksi</td>



</tr>
</thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_send_costumer where username = '$_SESSION[username]' ");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr>
<td><?php echo $no?> </td>  
<td><?php echo $row['no_tiket'] ?></td>
<td><?php echo $row['nama_pelanggan']?> </td>    
<td><?php echo $row['alamat'] ?></td>
<td><?php echo $row['pic'] ?></td>
<td><?php echo $row['infrastruktur']?> </td>    
<td><?php echo $row['initial_problem']?> </td>    
<td><?php echo $row['area'] ?></td>
<td><?php echo $row['service'] ?></td>
<td><?php echo $row['tgl_visit'] ?></td>
<td><?php echo $row['status'] ?></td>
<td><?php echo $row['note'] ?></td>
<td><?php echo $row ['nama_karyawan'] ?></td>
<td><?php echo $row ['nama_partner'] ?></td>
<td><?php echo $row ['jam_masuk'] ?></td>
<td width="100" align="center"> <a href="?menu=report_visit_ts&edit&id=<?php echo $row['id_tiketrequestvisit']?>">Report</a></td>

</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>
</form>
</body>
</html>