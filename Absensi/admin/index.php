<?php
session_start();
  include "../../Library/koneksi.php";
$perintah = new crud();	
$perintah ->koneksi();
$table = "tbl_admin";
@$username = $_POST['username'];
@$password =md5($_POST['password']);
$nama_form = "hal_admin.php?menu=home";

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

<style>
.body{
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: auto;
	height: auto;
	background-image:url(../../foto/126929_1600x1203.jpg);
	background-size:100% 100%;
	-webkit-filter: blur(5px);
	-moz-filter: blur(5px);
	z-index: 0;
}
</style>    
<link rel="stylesheet" href="../../css/style.css" />
	<link rel="icon" type="icon/image" href="../../foto/Biznet_Logo.png">
</head>

<body>
<br><br><br><br><br><br>
<div class="body"></div>
<div class="login-wrap"><br>


  <h2>Login Admin</h2>

  <div class="form">
    <input type="text" placeholder="Username" name="username" />
    <input type="password" placeholder="Password" name="password" />
    <input type="submit" name="login" value="Login">
    <input type="submit" name="kembali" value="Cancel">
  </div>
</div>
</body>
</form>