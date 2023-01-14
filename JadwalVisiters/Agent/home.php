<?php
@session_start();
$perintah=new crud();
$perintah->koneksi();

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_agent where username='$_SESSION[username]'"));
if (empty($_SESSION['username'])){
	echo "<script>alert('Anda belum melakukan login');document.location.href='index.php'</script>";
	}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<title>SIM Penjadwalan</title>
</head>

<body>

        <!-- Page Content -->
        <div id="page-content-wrapper" >
        

<h3 align="left">Sistem Informasi Manajemen Penjadwalan Karyawan V 0.1</h3>
<h3 align="justify">Welcome <a href="#"> <?php echo @$tampil['username']?></a><br>

</h3><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <center>
         	<img src="../../foto/biznet-new-logo-1.png" class="img-responsive" width="500px" height="300px"/>            
                    </center></div>
                </div>
</body>
</html>