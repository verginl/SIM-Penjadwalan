<?php 

$perintah = new crud();
$query="qw_send_backbone";
@$where="id_tiketbackbone = $_GET[id]";
$link="?menu=jadwal_request_visit";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_send_backbone where username='$_SESSION[username]'"));



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
<th>Sub Email</th>
<th>Tanggal Visit</th>
<th>Area</th>
<th>Initial Problem</th>
<th>Infrastruktur</th>
<th>Level</th>
<th>Sub Area</th>
<th>ID Tiket Backbone</th>
<th>Note</th>
<th>Nama TS</th>
<th>Nama Partner</th>
<th>Jam Berangkat</th>
<th>Aksi</th>


</tr>
</thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_send_backbone where username= '$_SESSION[username]'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr>
<td><?php echo $no?> </td>    
<td><?php echo $row['subjek_email']?> </td>    
<td><?php echo $row['tgl_visit']?> </td>    
<td><?php echo $row['area']?> </td>    
<td><?php echo $row['initial_problem_backbone']?> </td>  
<td><?php echo $row['infrastruktur']?> </td>   
<td><?php echo $row['level']?> </td>  
<td><?php echo $row['sub_area']?> </td>   
<td><?php echo $row['id_tiketbackbone']?> </td>    
<td><?php echo $row['note']?> </td>   
<td><?php echo $row ['nama_karyawan'] ?></td>
<td><?php echo $row ['nama_partner'] ?></td>
<td><?php echo $row ['jam_masuk'] ?></td>
<td width="100" align="center"> <a href="?menu=report_visit_backbone&edit&id=<?php echo $row['id_tiketbackbone']?>">Report</a></td>
</tr>
</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>
</form>
</body>
</html>