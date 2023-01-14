<?php 
$perintah=new crud();
$table="tbl_listrequest_visit";
$query = "qw_list_request_visit";
@$where="id_tiketrequestvisit=$_GET[id]";
$link="?menu=send_listrequest_visit";
@$field=array('id_tiketrequestvisit'=>$_POST['id_tiketrequestvisit'],'no_tiket'=>$_POST['no_tiket'],'nama_pelanggan'=>$_POST['nama_pelanggan'],'alamat'=>$_POST['alamat'],'pic'=>$_POST['pic'],'id_infrastruktur'=>$_POST['infrastruktur'],'id_problem'=>$_POST['problem'],'id_area'=>$_POST['area'],'id_karyawan' => $_POST['nama_karyawan'],'id_jam'=> $_POST['jam_berangkat']);
@$tgl=date('Y-m-d');
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_listrequest_visit where id_tiketrequestvisit='$_SESSION[id_tiketrequestvisit]'"));
@$table2="tbl_send_request_visit";

if(isset($_POST['simpan'])){
	@$perintah->simpanvisit($table2,$field,$where,$link);
	echo"<script>;document.location.href='$link'</script>";
}
if(isset($_GET['edit'])){
	@$edit=$perintah->edit($query,$where);
	
}


?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<meta charset="utf-8">
<title>Send Request Visiters</title>
</head>

<body><br>
<form method="post" >
<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>Send Data Request Visiters For TS</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Tiket</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="ID Otomatis" name="id_tiketrequestvisit" value="<?php echo @$edit['id_tiketrequestvisit'] ?>"></td>
</tr>

<tr>
      <td>No Tiket</td>
      <td>:</td>
      <td><input name="no_tiket" type="text" readonly class="form-control" id="no_tiket" placeholder="Masukkan Nomer Tiket" value="<?php echo @$edit['no_tiket'] ?>"></td>
</tr>
<tr>
      <td>Nama Costumer</td>
      <td>:</td>
      <td><input type="text" class="form-control" readonly placeholder="Masukan Nama Costumer" name="nama_pelanggan" value="<?php echo @$edit['nama_pelanggan'] ?>"></td>
</tr>

<tr>
      <td>Alamat</td>
      <td>:</td>
      <td>
<input type="text" name="alamat" readonly class="form-control" id="alamat" placeholder="Masukkan Alamat" value="<?php echo @$edit['alamat'] ?>"></textarea>

      </td>
</tr>
<tr>
      <td>PIC</td>
      <td>:</td>
      <td><input type="text" class="form-control" readonly placeholder="Masukan Pic" name="pic" value="<?php echo @$edit['pic'] ?>"></td>
</tr>
<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><select name="infrastruktur" class="form-control" readonly disabled>
        <option value="<?php echo @$edit ['infrastruktur'] ?>"> <?php echo @$edit ['infrastruktur']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_infrastruktur");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select>
   </td>
   </tr>

<tr>
      <td>Problem</td>
      <td>:</td>
      <td><select name="problem" class="form-control" readonly disabled>
        <option value="<?php echo @$edit ['problem'] ?>"> <?php echo @$edit ['problem']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_problem");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select>
   </td>
</tr>
<tr>
      <td>Area</td>
      <td>:</td>
      <td><select name="area" class="form-control" readonly disabled>
        <option value="<?php echo @$edit ['area'] ?>"> <?php echo @$edit ['area']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_area");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select></td>
</tr>


<tr>
      <td>Nama TS</td>
      <td>:</td>
      <td><select name="nama_karyawan" class="form-control" required >
        <option value="<?php echo @$edit ['nama_karyawan'] ?>"> <?php echo @$edit ['nama_karyawan']?> </option>
    <?php 
   $b= $perintah ->tampil("qw_absen where tgl_absen = '$tgl'");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['id_karyawan']?>" > <?php echo $value['nama_karyawan'] ?></option>
   <?php } ?>
   </select></td>
</tr>
<tr>
<td>Jam Berangkat</td>
<td>:</td>
<td>
<select name="jam_berangkat" class="form-control" required>
<option value="<?php echo @$edit ['id_jam'] ?>"> <?php echo @$edit ['jam_masuk']?> </option>
    <?php 
   $b= $perintah ->tampil("qw_absen_detail");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['id_jam']?>" > <?php echo $value['jam_masuk'] ?></option>
   <?php } ?>
</select>
</td>

</tr>

<td align="right" colspan="4">
<input class="btn btn-success" type="submit" name="simpan" value="Save"> </td>
</td>
</tr>
  </tbody>
</table>

<table class="table table-bordered">
<tr class="tr">
<td>No</td>
<td>Id Tiket</td>
<td>Nomer Tiket</td>
<td>Nama Costumer</td>
<td>Alamat</td>
<td>PIC</td>
<td>Infrastruktur</td>
<td>Problem</td>
<td>Area</td>
<td>Nama TS</td>
<TD>Jam Berangkat</TD>
</tr>
<?php
	$no=0;
	$b=$perintah-> tampil("tbl_send_request_visit");
	if($b==""){?>
   <tr><td align='center' colspan='12' style='color:#00B3FF'>DATA SEND VISIT TS EMPTY</td></tr>
    <?php 
	}else{
		foreach($b as $value){
			$no++;
	 ?>
<tr>
<td><?php echo $no?> </td>
<td><?php echo $value['id_tiketrequestvisit']?> </td>    
<td><?php echo $value['no_tiket'] ?></td>
<td><?php echo $value['nama_pelanggan']?> </td>    
<td><?php echo $value['alamat'] ?></td>
<td><?php echo $value['pic'] ?></td>
<td><?php echo $value['infrastruktur']?> </td>    
<td><?php echo $value['problem']?> </td>    
<td><?php echo $value['area'] ?></td>
<td><?php echo $value ['nama_karyawan'] ?></td>
<td><?php echo $value ['jam_berangkat'] ?></td>
</tr>
<?php 
  }}
  ?>
  
</table>


</form>
</body>
</html>