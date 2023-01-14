<?php
class crud {
	
// 	function koneksi (){
// ob_start();
// $server = "202.169.44.142:0";
// $username = "techadm_dpc";
// $password = "87654321";
// $database = "techadm_dpc";
function koneksi (){
		mysql_connect("localhost","root","");
		mysql_select_db ("db_penjadwalan");	

// Koneksi dan memilih database di server
// mysql_connect($server,$username,$password) or die("Koneksi gagal");
// mysql_select_db($database) or die("Database tidak bisa dibuka");
	
	}

function simpanvisit($table, $where2,array $field, $link){
@$tgl_visit="$_POST[tgl_visit]";
@$tgl=date('Y-m-d');
@$id_jam="$_POST[jam_berangkat]";
@$id_karyawan = "$_POST[nama_karyawan]";
	$sql1 = "SELECT * FROM $table WHERE id_karyawan = '$id_karyawan' AND tgl_visit = '$tgl_visit' AND id_jam = '$id_jam'";	
			$jalan1 = mysql_query($sql1);
			@$cek = mysql_num_rows($jalan1);
			if(@$cek > 0){			
echo '<div class="alert alert-danger">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Failed!</strong> Maaf Ada jadwal visit anda pada jam yang sama.
	</div>';

			}else{
				$sql2 = "SELECT * FROM $table WHERE '$_POST[tgl_visit]' <> '$tgl'";	
			$jalan2 = mysql_query($sql2);
			@$cek = mysql_num_rows($jalan2);
			if(@$cek > 0){			
echo '<div class="alert alert-danger">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Failed!</strong> Maaf Tanggal Visit harus tanggal sekarang '.$tgl.' .
	</div>';
			}else{
		$sql = "INSERT INTO ".$table." SET ";
		foreach($field as $key => $value){
		$sql.=" ".$key." = '".$value."',";
		}
		$sql=rtrim($sql,',');
		$jalan = mysql_query($sql);
		if($jalan){
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Data Berhasil Tersimpan.
	</div>';
	}
	}
}
}
function simpanabsen($table, $where2,array $field, $link){
	@$tgl=date('Y-m-d');
	@$tgl_now=date('l : d-m-Y');
	@$jam=date('H:i');
	$sql1 = "SELECT * FROM $table WHERE id_karyawan ='$where2' AND tgl_absen ='$tgl'";	
			$jalan1 = mysql_query($sql1);
			@$cek = mysql_num_rows($jalan1);
			if($cek > 0){			
echo '<div class="alert alert-danger">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Failed!</strong> Maaf Anda Sudah Absen Pada '.$tgl_now.' .
	</div>';
			}else{
		$sql = "INSERT INTO ".$table." SET ";
		foreach($field as $key => $value){
		$sql.=" ".$key." = '".$value."',";
		}
		$sql=rtrim($sql,',');
		$jalan = mysql_query($sql);
		if($jalan){
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Absen Anda Berhasil Tersimpan Pada Pukul '.$jam.'.
	</div>';
	}
	}
}
function simpan ($table, array $field,$link){
	$sql = "INSERT INTO ".$table." SET ";
	foreach($field as $key => $value){
		$sql.=" ".$key." = '".$value."',";
	}
	$sql=rtrim($sql,',');
	$jalan = mysql_query($sql);
	
	if($jalan){
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Data Berhasil Tersimpan.
	</div>';
	}else{  
	echo mysql_error();
	//echo '<div class="alert alert-danger">
	 //<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	//<strong>Failed!</strong> Data Tidak Tersimpan.
	//</div>';


	}
}
function cancelvisit($table, array $field,$link){
	$sql = "INSERT INTO ".$table." SET ";
	foreach($field as $key => $value){
		$sql.=" ".$key." = '".$value."',";
	}
	$sql=rtrim($sql,',');
	$jalan = mysql_query($sql);
	
	if($jalan){
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Data Berhasil Dibatalkan Visit, lihat pada Data Histori.
	</div>';
	}else{
// echo mysql_error();
 
  echo '<div class="alert alert-danger">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Failed!</strong> Maaf Data Gagal Dibatalkan Visit.
</div>';
	}
}

function returnn($table, array $field,$link){
	$sql = "INSERT INTO ".$table." SET ";
	foreach($field as $key => $value){
		$sql.=" ".$key." = '".$value."',";
	}
	$sql=rtrim($sql,',');
	$jalan = mysql_query($sql);
	
	if($jalan){
echo '<div class="alert alert-success">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Suksess!</strong> Data Berhasil Dikembalikan.
	</div>';
	}else{
// echo mysql_error();
 
  echo '<div class="alert alert-danger">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Failed!</strong> Maaf Data Tidak Bisa Dikembalikan.
</div>';
	}
}

	function tampil($table){
		$sql= "SELECT * FROM ".$table."";
		$tampil= mysql_query($sql);
		while(@$value=mysql_fetch_array($tampil)){
		$isi[]=$value;	
		}
		return @$isi;
	}
	function hapus ($table, $where,$link){
		$sql="DELETE FROM $table WHERE $where";
		$jalan=mysql_query($sql);
		if ($jalan){
			echo '<div class="alert alert-success">
			 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Suksess!</strong> Data Berhasil Dihapus.
					</div>';
		}else{
		echo '<div class="alert alert-danger">
	 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Failed!</strong> Data Tidak Terhapus.
		</div>';
		}
	}
	
	function edit($table, $where) {
		$sql= "SELECT * FROM $table WHERE $where";
		@$jalan=mysql_fetch_array(mysql_query($sql));
		return $jalan;
	}
	function ubah($table, array $field, $where,$link){
		$sql="UPDATE ".$table." SET";
		
		foreach($field as $key=> $value){
			$sql.=" ".$key."='".$value."',";
		}
		$sql=rtrim($sql,',');
		$sql.="WHERE ".$where."";
		$jalan= mysql_query($sql);
		if($jalan){
		echo '<div class="alert alert-success">
	 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Suksess!</strong> Data Berhasil Diubah.</strong>
		</div>';
		}else{
echo		mysql_error();
		//echo '<div class="alert alert-danger">
	 	//<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		//<strong>Failed!</strong> Data Gagal Terubah.</strong>
		//</div>';
		}
		}
		function upload($foto,$tempat){
			$alamat= $foto['tmp_name'];
			$namafile= $foto['name'];
			move_uploaded_file($alamat,"$tempat/$namafile");
			return $namafile;
		}
		function login($table, $username, $password, $nama_form){
			@session_start();
			$username=$_POST['username'];
			$password= md5($_POST['password']);
			$sql = "SELECT * FROM $table WHERE username = '$username' AND password = '$password'";
			$jalan = mysql_query($sql);
			@$tampil = mysql_fetch_array($jalan);
			@$cek = mysql_num_rows($jalan);
			if($cek > 0){
				@session_start($tampil[$username]);
				@session_start($tampil[$password]);
				$_SESSION['username'] = $username;
				echo "<script>alert('Welcome $username');document.location.href= '$nama_form'</script>";
			}else{
					echo "<script>alert('Login Failed, Username or Password Not Valid')</script>";
			}
		}
		
}
?>

