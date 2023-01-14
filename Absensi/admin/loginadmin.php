<?php
  include "../Library/koneksi.php";
$perintah = new crud();
$perintah->koneksi();
$table = "tbl_admin";
@$user = $_POST['user'];
@$password = $_POST['pass'];
$nama_form = "?menu=hal_admin";

@$fields = array('username' =>$_POST['user'],'password' =>$_POST['pass']);

if(isset($_POST['login'])){
	$perintah->login($table,$user,$password,$nama_form);	
}

if(isset($_POST['kembali'])){
	session_start();
	session_destroy();
	echo "<script>document.location.href='test.php'</script>";
}
?>
<form method="post">
<title>SIM Penjadwalan</title>
<style>
.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image:url(../foto/126929_1600x1200.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	-moz-filter: blur(5px);
	z-index: 0;
}
</style>
    <link rel="stylesheet" href="../css/LoginCss/cssnya/css/style.css" />

</head>

<body>
<br><br><br><br><br><br>
<div class="body"></div>
<div class="login-wrap"><br>


  <h2>Login Admin</h2>

  <div class="form">
    <input type="text" placeholder="Username" name="user" />
    <input type="password" placeholder="Password" name="pass" />
    <input type="submit" name="login" value="Masuk">
    <input type="submit" name="kembali" value="Kembali">
  </div>
</div>
</body>
</form>