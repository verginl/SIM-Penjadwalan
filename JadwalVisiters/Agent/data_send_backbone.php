<?php 
$perintah = new crud();
$table="tbl_send_backbone";
$table2="tbl_list_backbone";
$query="qw_send_backbone";
@$where="id_tiketbackbone = $_GET[id]";
$link="?menu=data_send_backbone";
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_send_backbone"));

@$field=array(	'id_problem'=>$_POST['initial_problem'],
				'id_area'=>$_POST['area'],
				'sub_area'=>$_POST['sub_area'],
				'subjek_email'=>$_POST['subjek_email'],
				'id_infrastruktur'=>$_POST['infrastruktur'],
				'id_level'=>$_POST['level'],
				'id_karyawan' => $_POST['nama_karyawan'],
				'id_jam'=> $_POST['jam_berangkat']);
if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
}
if(isset($_POST['return'])){
$perintah->simpan($table2,$field,$link);
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
<title>Data Send Request visit</title>
</head>

<body><br>
<form method="post" >
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>

    		<tr class="tr">
        		<Th   colspan="15"><center>Antrian Troubleshoot Multiple</center></Th>
        	</tr>

<tr>
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
<th>Aksi</th>
<th>Aksi</th>
<th>Aksi</th>

</tr>
</thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_send_backbone");
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
<td width="100" align="center"><a href="?menu=dsb&hapus&id=<?php echo $row['id_tiketbackbone'] ?>" onClick="return confirm('Anda ingin menghapus ?')">Delete</a></td>
<td width="100" align="center"> <a href="?menu=srb&edit1&id=<?php echo $row['id_tiketbackbone'] ?>">Edit</a></td>
<td width="100" align="center"> <a href="?menu=rb&edit1&id=<?php echo $row['id_tiketbackbone'] ?>">Return</a></td>
<td width="100" align="center"> <a href="?menu=rvbm&edit&id=<?php echo $row['id_tiketbackbone'] ?>">Report</a></td>

</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>


</form>
</body>
</html>