<?php 
$perintah=new crud();
$table="tbl_report_backbone";
$query = "qw_send_backbone";
@$where="id_tiketbackbone=$_GET[id]";
@$where2="id_report=$_GET[id]";
$link="?menu=report_visit_backbone";
@$tgl=date('Y-m-d');
@$tampil=mysql_fetch_array(mysql_query("SELECT*FROM qw_send_backbone where id_tiketbackbone='$_SESSION[id_tiketbackbone]'"));
@$field=array(
				'id_report'=>$_POST['id_report'],
				'id_tiketbackbone'=>$_POST['id_tiketbackbone'],
				'initial_problem_backbone'=>$_POST['initial_problem_backbone'],
				'area'=>$_POST['area'],
				'sub_area'=>$_POST['sub_area'],
				'subjek_email'=>$_POST['subjek_email'],
				'infrastruktur'=>$_POST['infrastruktur'],
								'level'=>$_POST['level'],
				'id_karyawan' => $_POST['nama_karyawan'],				
				'action' => $_POST['action'],
				'problem_sulving'=> $_POST['problem_sulving'],
				'tgl_visit'=> $_POST['tgl_visit'],
				'waktu'=> $_POST['waktu'],
				'nama_partner'=> $_POST['nama_partner'],
				);

 

if($_SERVER['REQUEST_METHOD']=="POST"){
$report=mysql_query("SELECT * FROM `tbl_report_backbone`");
$jml_report=mysql_num_rows($report);                      
@$isi=($_FILES['filename']['name']);
if (!empty($_POST['nama_karyawan'])){
@$id= $_SESSION['username']." & ".$_POST['nama_partner'];   }
else {
       $id= $_SESSION['username']['nama_karyawan'];
}
if (!empty($isi)){                          
//Email with attch
$to="customer_care@biznetnetworks.com,premiere_care@biznetnetworks.com,home_care@biznetnetworks.com";
$from="technical_support@biznetnetworks.com";
$ts = "Biznet Technical Support";
$cc_ts = "Biznet Technical Support";
$cc="technical_support@biznetnetworks.com";

$message = ini_set("SMTP","smtp.biznetnetworks.com");
$subject='Report Visit - '.$_POST['sub_area'].' '. $_POST['tgl_visit'].'';
$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

// baca info file
$tmp_name = $_FILES['filename']['tmp_name'];
$type = $_FILES['filename']['type'];
$name = $_FILES['filename']['name'];
$size = $_FILES['filename']['size'];
$coba = nl2br($_POST['action']);
$coba2 = nl2br($_POST['problem_sulving']);
$message = 
"
<table border='1'>
<tr BGCOLOR=#EE5C2D
>
<th colspan=2><font size=5>
Report Visit $_POST[sub_area] - $_POST[tgl_visit]
</th>
</font>
</tr>

<tr><td width=150>ID Tiket </td> <td width=450>        :  $_POST[id_tiketbackbone]</td></tr>

<tr><td>Initial Problem            </td><td>: $_POST[initial_problem_backbone] </td></tr>
<tr><td>Area         </td><td>         : $_POST[area] </td></tr>
<tr><td>Subjek Area            </td><td>     : $_POST[sub_area] </td></tr>
<tr><td>Subjek Email            </td><td>       : $_POST[subjek_email]  </td></tr>
<tr><td>Infrastruktur </td><td> : $_POST[infrastruktur]  </td></tr>
<tr><td>Nama Karyawan       </td><td>       : $_POST[nama_karyawan] </td></tr>

<tr><td colspan=2 BGCOLOR=#EE5C2D><b>Telah di lakukan visit pada : </b></td></tr>

<tr><td>Tanggal  </td><td>     : $_POST[tgl_report] </td></tr>
<tr><td>Jam           </td><td>: $_POST[waktu] </td></tr>



<tr><td colspan=2 BGCOLOR=#EE5C2D><b>TINDAKAN : </b></td></tr>


<tr><td align=left colspan=2>  $coba </td></tr>


<tr><td colspan=2 BGCOLOR=#EE5C2D><b>SOLUSI : </b> </td></tr>   
<tr><td colspan=2>$coba2</td></tr>

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

if(isset($_POST['simpan'])){
$perintah->simpan($table,$field,$link);
if (@mail($to, $subject, $message, wordwrap($headers),"-f '".$from."'"))
echo "<strong>Save data & sent Email sukses</strong><br>";
else  
echo "<strong>send failed !</strong>";
}}}else{


$to="customer_care@biznetnetworks.com,premiere_care@biznetnetworks.com,home_care@biznetnetworks.com";
$from="technical_support@biznetnetworks.com";
$ts = "Biznet Technical Support";
$cc_ts = "Biznet Technical Support";
$cc="technical_support@biznetnetworks.com";

$message = ini_set("SMTP","smtp.biznetnetworks.com");
$subject='Report Visit - '.$_POST['sub_area'].' '. $_POST['tgl_visit'].'';
$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

// baca info file
@$tmp_name = $_FILES['filename']['tmp_name'];
@$type = $_FILES['filename']['type'];
@$name = $_FILES['filename']['name'];
@$size = $_FILES['filename']['size'];
@$coba = nl2br($_POST['action']);
@$coba2 = nl2br($_POST['problem_sulving']);
@$message = 
"
<table border='1'>
<tr BGCOLOR=#EE5C2D>
<th colspan=2><font size=5>
Report Visit $_POST[sub_area] - $_POST[tgl_visit]
</th>
</font>
</tr>

<tr><td width=150>ID Tiket </td> <td width=450>        :  $_POST[id_tiketbackbone]</td></tr>

<tr><td>Initial Problem            </td><td>: $_POST[initial_problem_backbone] </td></tr>
<tr><td>Area         </td><td>         : $_POST[area] </td></tr>
<tr><td>Subjek Area            </td><td>     : $_POST[sub_area] </td></tr>
<tr><td>Subjek Email            </td><td>       : $_POST[subjek_email]  </td></tr>
<tr><td>Infrastruktur </td><td> : $_POST[infrastruktur]  </td></tr>

<tr><td colspan=2 BGCOLOR=#EE5C2D><b>Telah di lakukan visit pada : </b></td></tr>

<tr><td>Tanggal  </td><td>     : $_POST[tgl_visit] </td></tr>
<tr><td>Jam           </td><td>: $_POST[waktu] </td></tr>



<tr><td colspan=2 BGCOLOR=#EE5C2D><b>TINDAKAN : </b></td></tr>


<tr><td align=left colspan=2>  $coba </td></tr>


<tr><td colspan=2 BGCOLOR=#EE5C2D><b>SOLUSI : </b> </td></tr>   
<tr><td colspan=2>$coba2</td></tr>

<tr><td>Engineer   </td><td>         : $id </td></tr>

</table>

<br><font size = 3>Technical Support Team</font> <br>
                                             ";

@$headers .= "From: ".$ts." <".$from.">\r\n".
    "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
    'CC:'.$cc_ts.'<'.$cc.'>'. "\r\n" .
    'Reply-To: '.$from.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if(isset($_POST['simpan'])){
$perintah->simpan($table,$field,$link);
if (@mail($to, $subject, $message, wordwrap($headers),"-f '".$from."'"))
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Simpan Data Dan Kirim Email Sukses.
	</div>';
else  
echo '<div class="alert alert-danger">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Failed!</strong> Simpan Data Dan Kirim Email Gagal.
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

	  ?>


<?php }else{?>
<?php } ?>

<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>Report Visit Backbone TS</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Tiket Backbone</td>
      <td>:</td>
      <td><input type="text" readonly class="form-control" placeholder="ID Harus Sesuai" name="id_tiketbackbone" value="<?php echo @$edit['id_tiketbackbone'] ?>"></td>
</tr>


      <td>Initial Problem</td>
      <td>:</td>
      <td><select name="initial_problem_backbone" class="form-control" required  >
        <option value="<?php echo @$edit ['initial_problem_backbone'] ?>"> <?php echo @$edit ['initial_problem_backbone']?> </option>

   </select> 
   
   
   </td>
</tr>
<tr>
      <td>Area</td>
      <td>:</td>
      <td><select name="area" class="form-control" required >
        <option value="<?php echo @$edit ['area'] ?>"> <?php echo @$edit ['area']?> </option>

   
   </select> 
   </td>
</tr>
<tr>
      <td>Sub Area</td>
      <td>:</td>
      <td><input name="sub_area" type="text" readonly class="form-control" id="no_tiket" placeholder="Masukkan Sub Area" value="<?php echo @$edit['sub_area'] ?>"></td>
</tr>
<tr>
      <td>Subjek Email</td>
      <td>:</td>
      <td><input name="subjek_email" type="text" readonly  class="form-control" id="subjek_email" placeholder="Masukkan Subjek Email" value="<?php echo @$edit['subjek_email'] ?>"></td>
</tr>
<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><select name="infrastruktur" class="form-control" required  >
        <option value="<?php echo @$edit['infrastruktur'] ?>"> <?php echo @$edit ['infrastruktur']?> </option>
   </select> 
   </td>
   </tr>
<tr>
      <td>Level</td>
      <td>:</td>
      <td><select name="level" class="form-control" required  >
        <option value="<?php echo @$edit['level'] ?>"> <?php echo @$edit ['level']?> </option>
   </select> 
   </td>
   </tr>
<tr>
      <td>Nama TS</td>
      <td>:</td>
      <td><select name="nama_karyawan" class="form-control" required    >
        <option value="<?php echo @$edit ['id_karyawan'] ?>"> <?php echo @$edit ['nama_karyawan']?> </option>
   <?php 
   $b= $perintah ->tampil("qw_absen where username = '$_SESSION[username]' and tgl_absen = '$tgl' group by nama_karyawan ");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['id_karyawan']?>"> <?php echo $value['nama_karyawan'] ?></option>
   <?php } ?>
   </select> 
   </select></td>
</tr>
<tr>
      <td>Action</td>
      <td>:</td>
      <td>
<textarea name="action" class="form-control" id="action" placeholder="Masukkan Action" value="<?php echo @$edit['action'] ?>"></textarea>

      </td>
</tr>
<tr>
      <td>Problem Sulving</td>
      <td>:</td>
      <td>
<textarea name="problem_sulving" class="form-control" id="problem_sulving" placeholder="Masukkan Problem Sulving" value="<?php echo @$edit['problem_sulving'] ?>"></textarea>

      </td>
</tr>
<tr>
<td>Tanggal</td>
<td>:</td>
<td><input name="tgl_visit" type="text" readonly required class="form-control" id="tgl_visit" placeholder="Masukkan Tanggal Report"   value="<?php echo @$edit['tgl_visit'] ?>" >
          
</td>
</tr>
<tr>
<td>Waktu</td>
<td>:</td>
<td><input type="text" name="waktu" placeholder="Masukkan Waktu Ex: 10:00 - 12:00" required class="form-control"> </td>
</tr>

<tr>
<td>Attachment File</td>
<td>:</td>
<td><input type="file" name="file_name"> </td>
</tr>

<tr>
<td>Nama Partner</td>
<td>:</td>
<td><input type="text" name="nama_partner" placeholder="Partner Visit TS" readonly value="<?php echo @$edit['nama_partner']?>" class="form-control" readonly> </td>
</tr>


<td align="right" colspan="4">
 <?php if (@$_GET['id']==""){ ?>

<?php }else{?>
<input class="btn btn-success" type="submit"  name="simpan" value="Send Report"> </td>
<?php }?></td>
</td>
</tr>

<tr>
  </tbody>
</table>

</form>
<script type="text/javascript" src="../../js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>