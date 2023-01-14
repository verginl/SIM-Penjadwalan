<?php
$perintah = new crud();
$perintah -> koneksi ();
$table="tbl_absen";
@$tgl = date('Y-m-d');
date_default_timezone_set('Asia/Jakarta');
@$jam = date('H:i');
@$where2="$_POST[id_karyawan]";
@$where="id_karyawan = $_GET[id]";
$link="?menu=absen_karyawan";
@$field=array('id_karyawan'=>$_POST['id_karyawan'],'kd_shift'=>$_POST['jadwal_masuk'],'tgl_absen'=>$tgl,'jam_absen'=>$jam );

if(isset($_POST['simpan'])){
	$perintah->simpanabsen($table, $where2, $field, $link);
	

}


/*if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
}

if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
*/

if(isset($_GET['edit'])){
	@$edit=$perintah->edit($table,$where);
}
if(!empty($_GET['jadwal_masuk'])){
		$isinya=mysql_fetch_array(mysql_query("SELECT * FROM tbl_jadwal WHERE kd_shift='$_GET[jadwal_masuk]'"));
		$jadwal_masuk= $isinya['jadwal_masuk'];		
}

//}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SIM Penjadwalan</title>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
</head>

<body>
<br />

<form method="post">
<table class="table" width="500" align="center" >

<thead class="tr">
<th colspan="3"><center><h4>Absen Karyawan Tanggal : <?php echo $tgl ?></h4></center></th>
</thead>
  <tbody>
    <tr>
      <td>Nama Karyawan</td>
      <td>:</td>
      <td><select name="id_karyawan" class="form-control" required>
        <option value="<?php echo @$edit['id_karyawan'] ?>"> <?php echo @$edit ['nama_karyawan']?> </option>
   
   <?php 
   $b= $perintah ->tampil("tbl_karyawan order by nama_karyawan ASC");
   	foreach ($b as $value){   ?>
   <option value="<?php echo @$value['0']?>" > <?php echo @$value['1'] ?></option>

   <?php } ?>   
   </select>
   </td>
</tr>

<tr>
      <td>Pilih Shift</td>
      <td>:</td>
		<td>
        <select name="jadwal_masuk" class="form-control" required>
        <option value="<?php echo @$edit ['jadwal_masuk'] ?>"> <?php echo @$edit ['jadwal_masuk']?> </option>
   
   <?php 
   $b= $perintah ->tampil("tbl_jadwal where kd_shift group by kd_shift");
   	foreach ($b as $value){   ?>
   <option value="<?php echo @$value['kd_shift']?>" > <?php echo @$value['jadwal_masuk'] ?></option>

   <?php } ?>   
   </select>
        </td>
      <tr>
</tr>
<tr>
      <td>Tanggal Absen</td>
      <td>:</td>
      <td> 
      <input nama="tgl_absen" type="text" class="form-control" id="tgl_absen" placeholder="Masukkan tgl" value="<?php echo $tgl ?>" readonly="readonly" />

         </td>
      </tr>
           <tr>
      <td>Jam Absen</td>
      <td>:</td>
      <td> 
      <input nama="jam_absen" type="text" class="form-control" id="jam_absen" placeholder="Jam Absen" value="<?php echo $jam ?>" readonly="readonly" />

         </td>
      </tr>
<tr>
<td align="right" colspan="4">
 <?php if (@$_GET['id']==""){ ?>
<input class="btn btn-success" type="submit" name="simpan" value="Save">
<?php }else{?>
<input class="btn btn-success" type="submit" name="ubah" value="Update"> </td>
<?php }?></td>
</tr>
</table>

<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                        <tr class="tr">
<th>No</th>
<th>Nama Lengkap</th>
<th>Jadwal Masuk</th>
<th>Tanggal Absen</th>
<th>Jam Absen</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("select * from qw_absen where tgl_absen ='$tgl' ");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

<tr>
<td><?php echo $no?> </td>
<td><?php echo $row['nama_karyawan']?> </td> 
<td><?php echo $row['jadwal_masuk'] ?></td>
<td><?php echo $row['tgl_absen'] ?></td>
<td><?php echo $row['jam_absen'] ?></td>

</tr>   
					<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	

                </table>
</form>
</body>
</html>