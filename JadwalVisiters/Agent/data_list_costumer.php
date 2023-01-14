<?php 

$perintah = new crud();
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_costumer"));

@$field=array('id_tiketrequestvisit'=>$_POST['id_tiketrequestvisit'],'no_tiket'=>$_POST['nama_pelanggan'],'alamat'=>$_POST
['alamat'],'infrastruktur'=>$_POST['infrastruktur'],'initial_problem'=>$_POST['initial_problem'],'area'=>$_POST['area'],'service'=>$_POST['service'],'note'=>$_POST['note']);

if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
	echo"<script>;document.location.href='?menu=admin_visiters'</script>";
}

if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
}

if(isset($_POST['edit'])){
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
<title>Data Listrequest visit</title>
</head>

<body><br>
<form method="post" >



<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>

    		<tr class="tr">
        		<Th   colspan="15"><center>List Troubleshoot Single</center></Th>
        	</tr>

<tr>
<th>No</th>
<th>ID Tiket</th>
<th>No Tiket</th>
<th>Nama pelanggan</th>
<th>Alamat</th>
<th>PIC</th>
<th>Infrastruktur</th>
<th>Initial Problem</th>
<th>Area</th>
<th>Service</th>
<th>Note</th>
<th>Tanggal Visit</th>
</tr>
</thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_list_costumer");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
<td><?php echo $no?> </td>
<td><?php echo $row['id_tiketrequestvisit']?> </td>    
<td><?php echo $row['no_tiket']?> </td>    
<td><?php echo $row['nama_pelanggan'] ?></td>
<td><?php echo $row['alamat'] ?></td>
<td><?php echo $row['pic'] ?></td>
<td><?php echo $row['infrastruktur'] ?></td>
<td><?php echo $row['initial_problem'] ?></td>
<td><?php echo $row['area'] ?></td>
<td><?php echo $row['service'] ?></td>
<td><?php echo $row['note'] ?></td>
<td><?php echo $row['tgl_visit'] ?></td>
</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>


</form>
</body>
</html>