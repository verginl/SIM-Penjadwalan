<?php 

$perintah = new crud();
$query="qw_list_backbone";
$query1="qw_list_costumer";
@$where="id_tiketbackbone = $_GET[id]";
@$where1="id_tiketrequestvisit = $_GET[id2]";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_backbone"));
@$tampil1=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_costumer"));
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
<table id="example2" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
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
<th>Action</th>
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
<td width="100" align="center"> <a href="?menu=src&edit&id=<?php echo $row['id_tiketrequestvisit']?>">GO</a></td>
</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>

<br>
<hr><br>

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