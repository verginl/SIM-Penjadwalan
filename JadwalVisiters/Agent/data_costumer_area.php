<?php 

$perintah = new crud();
$table="qw_absen";
@$where="id_karyawan = $_GET[id]";
$link="?menu=absen";

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_costumer"));

@$field=array('id_tiketbackbone'=>$_POST['id_tiketbackbone'],'no_tiket'=>$_POST['nama_pelanggan'],'alamat'=>$_POST
['alamat'],'infrastruktur'=>$_POST['infrastruktur'],'initial_problem'=>$_POST['initial_problem'],'area'=>$_POST['area'],'service'=>$_POST['service'],'note'=>$_POST['note'],'nama_karyawan'=>$_POST['id_karyawan'],'jam_berangkat'=>$_POST['id_jam']);


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

<!-- ================== BATAS AREA PREVENTIVE PREVENTIVE MAINTENANCE ========================================= -->
<form method="post" >
<table class="table table-responsive" width="500">
  </tbody>
</table>


<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="background-color:#95a5a6;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Preventive Maintenance</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '1'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="background-color:#95a5a6;color:#FFFFFF;">
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
<br>
</form>
<!-- ===================================== BATAS AREA PREVENTIVE HOLD ========================================= -->
<form method="post" >
<table id="example2" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="background-color:#34495e; color:#FFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Hold</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '2'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="background-color:#34495e; color:#FFF;">
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
<br>
</form>
<!-- ===================================== BATAS AREA PENDING FFTH ========================================= -->
<form method="post" >
<table id="example3" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="background-color:#e67e22;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Pending FFTH</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '3'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

<tr style="background-color:#e67e22;color:#FFFFFF;">
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
<br>
</form>
<!-- ===================================== BATAS AREA SERANG ========================================= -->
<form method="post" >
<table id="example4" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="background-color:#e67e22;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Serang</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '4'");
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
<br>
</form>
<!-- ===================================== BATAS AREA Tanggerang ========================================= -->
<form method="post" >
<table id="example5" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="color:#FFF; background-color:#16a085">
        		<Th   colspan="10"><center>List Troubleshoot Area Tanggerang</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '5'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="color:#FFF; background-color:#16a085">
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
<br>
</form>
<!-- ===================================== BATAS AREA BEKASI========================================= -->
<form method="post" >
<table id="example6" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="color:#FFF; background-color:#2E2E2E">
        		<Th   colspan="10"><center>List Troubleshoot Area Bekasi</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '6'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="color:#FFF; background-color:#2E2E2E">
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

<br>
</form>
<!-- ===================================== BATAS AREA BOGOR ========================================= -->
<form method="post" >
<table id="example7" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="color:#FFF; background-color:#27ae60">
        		<Th   colspan="10"><center>List Troubleshoot Area Bogor</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '7'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="color:#FFF; background-color:#27ae60">
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
<br>
</form>
<!-- ===================================== BATAS AREA DEPOK ========================================= -->
<form method="post" >
<table id="example8" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="color:#FFF; background-color:#34495e">
        		<Th   colspan="10"><center>List Troubleshoot Area Depok</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '8'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr  style="color:#FFF; background-color:#34495e">
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
<br>
</form>
<!-- ===================================== BATAS AREA JAKARTA UTARA ========================================= -->
<form method="post" >
<table id="example9" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr  style="background-color:#95a5a6;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Jakarta Utara</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '9'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr  style="background-color:#95a5a6;color:#FFFFFF;">
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
<br>
</form>
<!-- ===================================== BATAS AREA JAKARTA PUSAT ========================================= -->
<form method="post" >
<table id="example10" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr  style="background-color:#34495e;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Jakarta Pusat</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '10'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr  style="background-color:#34495e;color:#FFFFFF;">
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
<br>
</form>
<!-- ===================================== BATAS AREA JAKARTA SELATAN ========================================= -->
<form method="post" >
<table id="example11" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr  style="background-color:#95a5a6;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Jakarta Selatan</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '11'");
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
<br>
</form>
<!-- ===================================== BATAS AREA JAKARTA BARAT ========================================= -->
<form method="post" >
<table id="example12" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="background-color:#34495e;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Jakarta Barat</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '12'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="background-color:#34495e;color:#FFFFFF;">
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
<br>
</form>
<!-- ===================================== BATAS AREA MID DAN SEKITARNYA========================================= -->
<form method="post" >
<table id="example13" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr  style="background-color:#95a5a6;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Mid Dan Sekitarnya</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '13'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr  style="background-color:#95a5a6;color:#FFFFFF;">
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
<br></form>

<!-- ===================================== BATAS AREA PRIORITY COSTUMER========================================= -->
<form method="post" >
<table id="example14" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
    		<tr style="background-color:#34495e;color:#FFFFFF;">
        		<Th   colspan="10"><center>List Troubleshoot Area Priority Costumer</center></Th>
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
					$result = mysql_query("SELECT * FROM qw_list_costumer where id_area = '14'");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr style="background-color:#34495e;color:#FFFFFF;">
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
<br>
</form>
</body>
</html>