<?php
@session_start();
$perintah=new crud();
$perintah->koneksi();

@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_karyawan where username='$_SESSION[username]'"));
if (empty($_SESSION['username'])){
	echo "<script>alert('Anda belum melakukan login');document.location.href='index.php'</script>";
	}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<title>SIM Penjadwalan</title>
<style type="text/css">
        body {margin: 0; padding: 0; min-width: 100%!important;}
        .content {width: 100%; max-width: 600px;}  
        </style>

</head>

<body>

        <!-- Page Content -->
        <div id="page-content-wrapper" >
<h3 align="justify"> Sistem Informasi Manajemen Penjadwalan V 0.1</h3>
<h3 align="justify">Welcome <a href="?menu=data_diri"> <?php echo @$tampil['nama_karyawan']?></a>
</h3><br></div>
</div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <center>
         	<img src="../../foto/Biznet-Splash-Banner-e1432690044271.jpg" class="img-responsive" width="700px" height="250px"/>            
                    </center>
                    </div>
                </div>
            </div>
</body>
</html>