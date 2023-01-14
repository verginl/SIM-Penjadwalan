<?php 
$perintah=new crud();
$table="tbl_karyawan";
@$where="id_karyawan = $_GET[id]";
$link="?menu=home";
@$field=array('id_karyawan'=>$_POST['id_karyawan'],'nama_karyawan'=>$_POST['nama_karyawan'],'jk'=>$_POST['jk'],'tgl_lahir'=>$_POST['tgl_lahir'],'no_hp'=>$_POST['no_hp'],'email'=>$_POST['email'],'username'=>$_POST['username'],'password'=>md5($_POST['password']));
@$field1=array('id_karyawan'=>$_POST['id_karyawan'],'nama_karyawan'=>$_POST['nama_karyawan'],'jk'=>$_POST['jk'],'tgl_lahir'=>$_POST['tgl_lahir'],'no_hp'=>$_POST['no_hp'],'email'=>$_POST['email'],'username'=>$_POST['username']);
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_karyawan where username='$_SESSION[username]'"));

if(isset($_GET['edit'])){
	@$edit=$perintah->edit($table,$where);	
}
if(isset($_POST['ubah'])){
if(empty($_POST['password'])){
	@$perintah->ubah($table,$field1,$where,$link);
}else{
	@$perintah->ubah($table,$field,$where,$link);	
}
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
<link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<meta charset="utf-8">
<title>Input Karyawan</title>
</head>

<body><br>
<form method="post">
<table class="table" width="500">
<thead>
<tr class="tr">
        		<Th   colspan="4"><center><h4>UBAH DATA DIRI</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Karyawan</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="ID Otomatis" name="id_karyawan" value="<?php echo @$edit['id_karyawan'] ?>"></td>
</tr>
<tr>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><input name="nama_karyawan" type="text" required class="form-control" id="nama_karyawan" placeholder="Masukkan Nama" value="<?php echo @$edit['nama_karyawan'] ?>"></td>
</tr>
<tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><select name="jk" class="form-control" value"<?php @$edit['jk'] ?>" required >
      <option>Pilih Jenis Kelamin</option>
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option> </select></td>
</tr>
<tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><div class="form-group">
                <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input size="16" name="tgl_lahir" type="text" required class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" readonly value="<?php echo @$edit['tgl_lahir'] ?>" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
          </div></td>
</tr>
<tr>
      <td>No Handphone</td>
      <td>:</td>
      <td><input name="no_hp" type="text" required class="form-control" id="no_hp" placeholder="Nomor Handphone" value="<?php echo @$edit['no_hp'] ?>"></td>
</tr>
<tr>
      <td>E-mail</td>
      <td>:</td>
      <td><input name="email" type="text" required class="form-control" id="email" placeholder="your-email@example.com" value="<?php echo @$edit['email'] ?>"></td>
</tr>
<tr>
      <td>Username</td>
      <td>:</td>
      <td><input type="text" class="form-control" required placeholder="Masukkan Username" name="username" readonly = "readonly" value="<?php echo @$edit['username'] ?>"></td>
</tr>
<tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="text" class="form-control" placeholder=" Apabila password tidak diubah, dikosongkan saja." name="password"></td>
</tr>
<tr><td></td><td></td>
<td align="right">
<input class="btn btn-success" type="submit" name="ubah" value="Update"> 
</td>
</tr>
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