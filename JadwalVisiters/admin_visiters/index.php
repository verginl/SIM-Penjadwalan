<?php
session_start();
  include "../../Library/koneksi.php";
$perintah = new crud();	
$perintah ->koneksi();
$table = "tbl_admin_visiters";
@$username = $_POST['username'];
@$password =md5($_POST['password']);
$nama_form = "hal_admin_visit.php?menu=dtbssssss";

@$field = array('username' =>$_POST['username'],'password' =>$_POST['password']);

if(isset($_POST['login'])){
	$perintah->login($table, $username, $password, $nama_form);

}

if(isset($_POST['kembali'])){
	
	echo "<script>document.location.href='../../index.php'</script>";
}
?>
<form method="post">
<title>SIM Penjadwalan</title>
	<link rel="icon" type="icon/image" href="../../foto/Biznet_Logo.png">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<style>
.body{
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: auto;
	height: auto;
	background-image:url(../../foto/paris_by_donjapy2011-d474d5f.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	-moz-filter: blur(5px);
	z-index: 0;
}
</style>
    <link rel="stylesheet" href="../../css/style.css" />

</head>

<body>
<br><br><br><br><br><br>
<div class="body"></div>
<div class="login-wrap"><br>


  <h2>Login Admin Visiters</h2>

  <div class="form">
    <input type="text" placeholder="Username" name="username" />
    <input type="password" placeholder="Password" name="password" />
    <input type="submit" name="login" value="Login">
    <input type="submit" name="kembali" value="Cancel">
  </div>
</div>
</body>
</form>