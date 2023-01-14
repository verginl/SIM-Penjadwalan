<?php 
$perintah=new crud();
$table="tbl_report";
$query = "qw_report_ts";
@$where="id_report=$_GET[id]";
$link="?menu=erts";
@$tgl=date('Y-m-d');
@$field=array(
				'id_report'=>$_POST['id_report'],
				'id_tiketrequestvisit'=>$_POST['id_tiketrequestvisit'],
				'no_tiket'=>$_POST['no_tiket'],
				'nama_pelanggan'=>$_POST['nama_pelanggan'],
				'alamat'=>$_POST['alamat'],
				'pic'=>$_POST['pic'],
				//'id_infrastruktur'=>$_POST['infrastruktur'],
				'infrastruktur'=>$_POST['infrastruktur'],
				//'id_problem'=>$_POST['initial_problem'],
				'initial_problem'=>$_POST['initial_problem'],
				//'id_area'=>$_POST['area'],
				'area'=>$_POST['area'],
				'service'=>$_POST['service'],
				'id_karyawan' => $_POST['nama_karyawan'],
				'no_telp'=> $_POST['no_telp'],
				//'id_modem'=> $_POST['modem'],
				'nama_modem'=>$_POST['nama_modem'],
				//'id_replace_modem'=>$_POST['nama_replace_modem'],
				'nama_replace_modem'=>$_POST['nama_replace_modem'],
				'replace_adaptor'=>$_POST['replace_adaptor'],
				'serial_modem_cabut'=>$_POST['serial_modem_cabut'],
				'serial_modem_pasang'=>$_POST['serial_modem_pasang'],
				'action'=> $_POST['action'],
				'solusi'=> $_POST['solusi'],
				//'id_status'=> $_POST['status'],
				'status'=>$_POST['status'],
				'tgl_visit'=> $_POST['tgl_visit'],
				'waktu'=> $_POST['waktu'],
				//'id_charge'=> $_POST['charge'],
				'charge'=>$_POST['charge'],
				'nama_partner'=>$_POST['nama_partner'],
				);

 

if($_SERVER['REQUEST_METHOD']=="POST"){
$report=mysql_query("SELECT * FROM `tbl_report`");
$jml_report=mysql_num_rows($report);                      
@$isi=($_FILES['filename']['name']);
if (!empty($_POST['nama_karyawan'])){
@$id= $_SESSION['username']." & ".$_POST['nama_partner'];   }
else {
       $id= $_SESSION['username'];
}
if (!empty($isi)){                          
//Email with attch
$to="customer_care@biznetnetworks.com,premiere_care@biznetnetworks.com,home_care@biznetnetworks.com";
$from="technical_support@biznetnetworks.com";
$ts = "Biznet Technical Support";
$cc_ts = "Biznet Technical Support";
$cc="technical_support@biznetnetworks.com";

$message = ini_set("SMTP","smtp.biznetnetworks.com");
$subject='Report Visit '. $_POST['nama_pelanggan'].'  - TiketID : '. $_POST['no_tiket'].' - Revised';
$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

// baca info file
$tmp_name = $_FILES['filename']['tmp_name'];
$type = $_FILES['filename']['type'];
$name = $_FILES['filename']['name'];
$size = $_FILES['filename']['size'];
$coba = nl2br($_POST['action']);
$coba2 = nl2br($_POST['solusi']);
$message = 
"
<table border='1'>
<tr BGCOLOR=#99CCFF>
<th colspan=2><font size=5>
Report Visit $_POST[nama_pelanggan] - TiketID : $_POST[no_tiket] - Revised
</th>
</font>
</tr>
 
<tr><td width=150>Nama Pelanggan </td> <td width=450>        :  $_POST[nama_pelanggan]</td></tr>

<tr><td>No Tiket            </td><td>: $_POST[no_tiket] </td></tr>
<tr><td>Alamat         </td><td>         : $_POST[alamat] </td></tr>
<tr><td>Kendala            </td><td>     : $_POST[initial_problem] </td></tr>
<tr><td>Modem            </td><td>       : $_POST[nama_modem]  </td></tr>
<tr><td>Service            </td><td>       : $_POST[service]  </td></tr>
<tr><td>PIC $_POST[pic] </td><td> : $_POST[pic]  </td></tr>
<tr><td>No Telepon       </td><td>       : $_POST[no_telp] </td></tr>

<tr><td colspan=2 BGCOLOR=#99CCFF><b>Telah di lakukan visit pada : </b></td></tr>

<tr><td>Tanggal  </td><td>     : $_POST[tgl_visit] </td></tr>
<tr><td>Jam           </td><td>: $_POST[waktu] </td></tr>



<tr><td colspan=2 BGCOLOR=#99CCFF><b>TINDAKAN : </b></td></tr>


<tr><td align=left colspan=2>  $coba </td></tr>


<tr><td colspan=2 BGCOLOR=#99CCFF><b>SOLUSI : </b> </td></tr>   
<tr><td colspan=2>$coba2</td></tr>
<tr><td colspan=2 BGCOLOR=#99CCFF><b>DATA TEKNIS :</b> </td></tr>
<tr><td>S/N modem uninstall </td><td>: $_POST[serial_modem_cabut]</td></tr>
<tr><td>S/N modem install  </td><td> : $_POST[serial_modem_pasang]</td></tr>
<tr><td>Status terakhir </td><td> : $_POST[status]</td></tr>
<tr><td>Note   </td><td>         : $_POST[charge]</td></tr>
<tr><td>Engineer   </td><td>         : $id </td></tr>

</table>

<br><font size = 3>Technical Support Team</font> <br>
                                             ";


// jika upload sukses
if (file_exists($tmp_name)){

// cek name file
if(is_uploaded_file($tmp_name)){

// buka file & read
$file = fopen($tmp_name,'rb');
// baca size file
$data = fread($file,filesize($tmp_name));

// close file
fclose($file);

// split file
$data = chunk_split(base64_encode($data));
}

// bangen header email
$headers .= "From: ".$ts." <".$from.">\r\n".
'CC:'.$cc_ts.'<'.$cc.'>'. "\r\n" .
'Reply-To: '.$from.'' . "\r\n" .

"MIME-Version: 1.0\r\n" .
"Content-Type: multipart/mixed;\r\n" .
" boundary=\"{$mime_boundary}\"";

// bangun isi email (body)
$message = "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type: text/html; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$message . "\n\n";
$message .= "--{$mime_boundary}\n" .
"Content-Type: {$type};\n" .
" name=\"{$name}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"--{$mime_boundary}--\n";

// sent email 

if(isset($_POST['ubah'])){
$perintah->ubah($table,$field,$where,$link);
if (@mail($to, $subject, $message, wordwrap($headers),"-f '".$from."'"))
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Revisi Data Dan Kirim Email Sukses.
	</div>';
else  
echo '<div class="alert alert-danger">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Failed!</strong> Revisi Data Dan Kirim Email Gagal.
	</div>';}}}else{


$to="customer_care@biznetnetworks.com,premiere_care@biznetnetworks.com,home_care@biznetnetworks.com";
$ts = "Biznet Technical Support";
$cc_ts = "Biznet Technical Support";
$from="technical_support@biznetnetworks.com";
$cc="technical_support@biznetnetworks.com";
$message = ini_set("SMTP","smtp.biznetnetworks.com");
@$subject = 'Report Visit '. $_POST['nama_pelanggan'].'  - TiketID : '. $_POST['no_tiket'].' - Revised ';
$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

@$coba = nl2br($_POST['action']);
@$coba2 = nl2br($_POST['solusi']);
@$message = 
"
<table border='1'>
<tr BGCOLOR=#99CCFF>
<th colspan=2><font size=5>
Report Visit $_POST[nama_pelanggan] - TiketID : $_POST[no_tiket] - Revised
</th>
</font>
</tr>

<tr><td width=150>Nama Pelanggan </td> <td width=450>        :  $_POST[nama_pelanggan]</td></tr>

<tr><td>No Tiket            </td><td>: $_POST[no_tiket] </td></tr>
<tr><td>Alamat         </td><td>         : $_POST[alamat] </td></tr>
<tr><td>Kendala            </td><td>     : $_POST[initial_problem] </td></tr>
<tr><td>Modem            </td><td>       : $_POST[nama_modem]  </td></tr>
<tr><td>Service            </td><td>       : $_POST[service]  </td></tr>
<tr><td>PIC $_POST[pic] </td><td> : $_POST[pic]  </td></tr>
<tr><td>No Telepon       </td><td>       : $_POST[no_telp] </td></tr>

<tr><td colspan=2 BGCOLOR=#99CCFF><b>Telah di lakukan visit pada : </b></td></tr>

<tr><td>Tanggal  </td><td>     : $_POST[tgl_visit] </td></tr>
<tr><td>Jam           </td><td>: $_POST[waktu] </td></tr>



<tr><td colspan=2 BGCOLOR=#99CCFF><b>TINDAKAN : </b></td></tr>


<tr><td align=left colspan=2>  $coba </td></tr>


<tr><td colspan=2 BGCOLOR=#99CCFF><b>SOLUSI : </b> </td></tr>   
<tr><td colspan=2>$coba2</td></tr>
<tr><td colspan=2 BGCOLOR=#99CCFF><b>DATA TEKNIS :</b> </td></tr>
<tr><td>S/N modem uninstall </td><td>: $_POST[serial_modem_cabut]</td></tr>
<tr><td>S/N modem install  </td><td> : $_POST[serial_modem_pasang]</td></tr>
<tr><td>Status terakhir </td><td> : $_POST[status]</td></tr>
<tr><td>Note   </td><td>         : $_POST[charge]</td></tr>
<tr><td>Engineer   </td><td>         : $id </td></tr>

</table>

<br><font size = 3>Technical Support Team</font> <br>
                                             ";

@$headers .= "From: ".$ts." <".$from.">\r\n".
    "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
    'CC:'.$cc_ts.'<'.$cc.'>'. "\r\n" .
    'Reply-To: '.$from.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if(isset($_POST['ubah'])){
$perintah->ubah($table,$field,$where,$link);
if (@mail($to, $subject, $message, wordwrap($headers),"-f '".$from."'"))
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Revisi Data Dan Kirim Email Sukses.
	</div>';
else  
echo '<div class="alert alert-danger">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Failed!</strong> Revisi Data Dan Kirim Email Gagal.
	</div>';
}}
	
}
 

if(isset($_GET['edit'])){
	@$edit=$perintah->edit($query,$where);	
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
<title>Send Report Visit TS</title>
</head>

<body><br>
<form action="" method="POST" enctype="multipart/form-data" name="form1">
 <?php if (@$_GET['id']==""){
	echo '<div class="alert alert-info">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Read This!</strong> Untuk Mengisi data, pilih data dari "Schedule Visit TS", lalu Report.
	</div>';	  
 }else{

} ?>
<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>Report Visit TS</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Report</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly placeholder="ID Harus Sesuai" name="id_report" value="<?php echo @$edit['id_report'] ?>"></td>
</tr>
    <tr>
      <td>ID Tiket</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly placeholder="ID Harus Sesuai" name="id_tiketrequestvisit" value="<?php echo @$edit['id_tiketrequestvisit'] ?>"></td>
</tr>

<tr>
      <td>No Tiket</td>
      <td>:</td>
      <td><input name="no_tiket" type="text"  readonly  class="form-control" id="no_tiket" placeholder="Nomor Tiket Harus Sesuai" value="<?php echo @$edit['no_tiket'] ?>"></td>
</tr>
<tr>
      <td>Nama Costumer</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Nama Costumer Harus Sesuai" name="nama_pelanggan" value="<?php echo @$edit['nama_pelanggan'] ?>"></td>
</tr>

<tr>
      <td>Alamat</td>
      <td>:</td>
      <td>
<input type="text" name="alamat" readonly   class="form-control" id="alamat" placeholder="Masukkan Alamat" value="<?php echo @$edit['alamat'] ?>"></textarea>

      </td>
</tr>
<tr>
      <td>PIC</td>
      <td>:</td>
      <td><input type="text" class="form-control" readonly   placeholder="Masukan Pic" name="pic" value="<?php echo @$edit['pic'] ?>"></td>
</tr>
<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><select name="infrastruktur" class="form-control" required   >
        <option value="<?php echo @$edit['infrastruktur'] ?>"> <?php echo @$edit ['infrastruktur']?> </option>
        
        
   
   </select>
   </td>
   </tr>

<tr>
      <td>Initial Problem</td>
      <td>:</td>
      <td><select name="initial_problem" class="form-control" required    >
        <option value="<?php echo @$edit ['initial_problem'] ?>"> <?php echo @$edit ['initial_problem']?> </option>

   </select>   
   
   </td>
</tr>
<tr>
      <td>Area</td>
      <td>:</td>
      <td><select name="area" class="form-control" required   >
        <option value="<?php echo @$edit ['area'] ?>"> <?php echo @$edit ['area']?> </option>

   
   </select>
   </td>
</tr>
<tr>
      <td>Service</td>
      <td>:</td>
      <td><select name="service" class="form-control" required   >
        <option value="<?php echo @$edit ['service'] ?>"> <?php echo @$edit ['service']?> </option>

   
   </select>
   </td>
</tr>

<tr>
      <td>Nama TS</td>
      <td>:</td>
      <td><select name="nama_karyawan" class="form-control" required     >
        <option value="<?php echo @$edit ['id_karyawan'] ?>"> <?php echo @$edit ['nama_karyawan']?> </option>
        
 <?php 
   $b= $perintah ->tampil(" qw_absen_detail where username = '$_SESSION[username]' Group By nama_karyawan ");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['nama_karyawan']?>"> <?php echo $value['nama_karyawan'] ?></option>
   <?php } ?>
   </select>  

</td>
</tr>
<tr>
<td>No Telepon</td>
<td>:</td>
<td><input type="text" name="no_telp" required placeholder="Masukkan Nomor Telepon" class="form-control" value="<?php echo @$edit['no_telp']?>"></td>
</tr>

<tr>
      <td>Modem</td>
      <td>:</td>
      <td><select name="nama_modem" class="form-control" required >
      
        <option value="<?php echo @$edit ['nama_modem'] ?>"> <?php echo @$edit ['nama_modem']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_modem");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['1']?>"> <?php echo $value['1'] ?></option>
   <?php } ?>
   </select></td>
</tr>

<tr>
      <td>Replace Modem</td>
      <td>:</td>
      <td><select name="nama_replace_modem" class="form-control" required >
      
        <option value="<?php echo @$edit ['nama_replace_modem'] ?>"> <?php echo @$edit ['nama_replace_modem']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_replace_modem");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['1']?>"> <?php echo $value['1'] ?></option>
   <?php } ?>
   </select></td>
</tr>
<tr>
      <td>Replace Adaptor</td>
      <td>:</td>
      <td><select name="replace_adaptor" class="form-control" value"<?php @$edit['replace_adaptor'] ?>" required >
      <option value="">Pilih Replace Adaptor</option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option> </select></td>
</tr>

<tr>
<td>S/N Modem Uninstall</td>
<td>:</td>
<td><input type="text" class="form-control" name="serial_modem_cabut" placeholder="Diisi Dengan Serial Number Modem yang Dicabut" value="<?php echo @$edit['serial_modem_cabut'] ?>"></td>

</tr>
<tr>
<td>S/N Modem Instal</td>
<td>:</td>
<td><input type="text" class="form-control" name="serial_modem_pasang" placeholder="Diisi Dengan Serial Number Modem yang Dipasang" value="<?php echo @$edit['serial_modem_pasang'] ?>"></td>

</tr>
<tr>
      <td>Action</td>
      <td>:</td>
      <td>
<textarea name="action" class="form-control" id="action" placeholder="Masukkan Action" value=""><?php echo @$edit['action'] ?></textarea>

      </td>
</tr>
<tr>
      <td>Solusi</td>
      <td>:</td>
      <td>
<textarea name="solusi" class="form-control" id="solusi" placeholder="Masukkan Solusi" value=""><?php echo @$edit['solusi'] ?></textarea>

      </td>
</tr>
<tr>
      <td>Status Terakhir</td>
      <td>:</td>
      <td><select name="status" class="form-control" required >
        <option value="<?php echo @$edit['status'] ?>"> <?php echo @$edit ['status']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_status");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['1']?>"> <?php echo $value['1'] ?></option>
   <?php } ?>
   </select></td>
</tr>
<tr>
<td>Tanggal</td>
<td>:</td>
<td>

                    <input size="16" name="tgl_visit" type="text" required class="form-control" id="tgl_visit" placeholder="Masukkan Tanggal Report" readonly value="<?php echo @$edit['tgl_visit'] ?>" ></td>
</tr>
<tr>
<td>Waktu</td>
<td>:</td>
<td><input type="text" name="waktu" placeholder="Masukkan Waktu Ex: 10:00 - 12:00" required class="form-control" value="<?php echo @$edit['waktu'] ?>"> </td>
</tr>
<tr>
      <td>Charge</td>
      <td>:</td>
      <td><select name="charge" class="form-control" required >
          
        <option value="<?php echo @$edit ['charge'] ?>"> <?php echo @$edit ['charge']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_charge");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['1']?>"> <?php echo $value['1'] ?></option>
   <?php } ?>
   </select></td>
</tr>

<tr>
<td>Attachment File</td>
<td>:</td>
<td><input type="file" name="file_name"> </td>
</tr>
<tr>
<td>Nama Partner</td>
<td>:</td>
<td><input type="text" name="nama_partner" required placeholder="Masukkan Partner Visit" class="form-control" value="<?php echo @$edit['nama_partner'] ?>"></td>
</tr>
<td align="right" colspan="4">
 <?php if (@$_GET['id']==""){ ?>
<?php }else{ ?>
<input class="btn btn-success" type="submit"  name="ubah" value="Update Report">
<?php } ?>

</td>
</td>
</tr>

  </tbody>
</table>

</form>
</body>
</html>