<?php 

$perintah = new crud();
$table="tbl_list_backbone";
$query="qw_list_backbone";
@$where="id_tiketbackbone = $_GET[id]";
$link="?menu=dlb";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_backbone"));

@$field=array(	
				'id_problem_backbone'=>$_POST['initial_problem_backbone'],
				'id_area'=>$_POST['area'],
				'sub_area'=>$_POST['sub_area'],
				'subjek_email'=>$_POST['subjek_email'],
				'id_infrastruktur'=>$_POST['infrastruktur'],
);

if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
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
<title>Data List Backbone</title>
</head>

<body><br>
<form method="post" >
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                    
    		<tr class="tr">
        		<Th   colspan="11"><center>List Troubleshoot Multiple</center></Th>
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
<th>Action</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_list_backbone");
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

	<td width="100" align="center"> <a href="?menu=srb&edit&id=<?php echo @$row['id_tiketbackbone'] ?>">Go</a></td>
            
                        </tr>
                    
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>

</form>
</body>
</html>