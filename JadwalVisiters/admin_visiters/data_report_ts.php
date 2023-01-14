<?php 

$perintah = new crud();
$table="qw_report_ts";
@$where="id_report = $_GET[id]";
$link="?menu=data_report_ts";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_report_ts"));


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
<tr><th colspan="24"><center>Data Report Costumer</center></th>
</tr>
<tr class="tr">
<th>No</th>
<th>Nomer Tiket</th>
<th>Nama Costumer</th>
<th>Alamat</th>
<th>PIC</th>
<th>Infrastruktur</th>
<th>Initial Problem</th>
<th>Area</th>
<th>Service</th>
<th>Nama TS</th>
<th>No Telepon</th>
<th>Modem</th>
<th>Replace Modem</th>
<th>Replace Adaptor</th>
<th>S/N Modem Uninstall</th>
<th>S/N Modem Install</th>
<th>Action</th>
<th>Solusi</th>
<th>Status</th>
<th>Tanggal</th>
<th>Waktu</th>
<th>Charge</th>
<th>Nama Partner</th>
<th>Aksi</th>
</tr>
</thead>
                    <?php
					$result = mysql_query("select * from qw_report_ts ");
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
<td><?php echo $row ['nama_karyawan'] ?></td>
<td><?php echo $row ['no_telp'] ?></td>
<td><?php echo $row ['nama_modem'] ?></td>
<td><?php echo $row ['nama_replace_modem'] ?></td>
<td><?php echo $row ['replace_adaptor'] ?></td>
<td><?php echo $row ['serial_modem_cabut'] ?></td>
<td><?php echo $row ['serial_modem_pasang'] ?></td>
<td><?php echo $row ['action'] ?></td>
<td><?php echo $row ['solusi'] ?></td>
<td><?php echo $row ['status'] ?></td>
<td><?php echo $row ['tgl_visit'] ?></td>
<td><?php echo $row ['waktu'] ?></td>
<td><?php echo $row ['charge'] ?></td>
<td><?php echo $row ['nama_partner'] ?></td>
<td width="100" align="center"> <a href="?menu=erts&edit&id=<?php echo $row['id_report'] ?>">Edit</a></td>
</tr>
<?php  $no++;  }
					?>
<tfoot>
<tr>

<td colspan="24" align="right"><a href="export_costumer.php">Export Excel</a></td>
</tr>
</tfoot>
		</div><!-- /.box-body -->
        </div>	
</table>
</form>
</body>
</html>