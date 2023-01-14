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
<meta charset="utf-8">
<title>Data Jadwal Visit TS</title>
</head>

<body><br>
<form method="post" >


<table id="example" class=" table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table">
<thead>
<tr class="tr">
<th>No</th>
<th>Tiket</th>
<th>Costumer</th>
<th>Alamat</th>
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