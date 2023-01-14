<?php
if(isset($_POST['admin'])){
	echo "<script>document.location.href='Absensi/admin/index.php'</script>";
}
if(isset($_POST['karyawan'])){
	echo "<script>document.location.href='Absensi/karyawan/index.php'</script>";	
}
if(isset($_POST['admin_visit'])){
	echo "<script>document.location.href='JadwalVisiters/admin_visiters/index.php'</script>";	
}
if(isset($_POST['agent'])){
	echo "<script>document.location.href='JadwalVisiters/Agent/index.php'</script>";	
}
?>


<form method="post">
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
	<link rel="icon" type="icon/image" href="foto/Biznet_Logo.png">
  <title>SIM Penjadwalan</title>
      <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/loginawal.css" />

</head>
 <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

.body{
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: auto;
	height: auto;
	background-image:url(foto/126929_1600x12001.jpg);
	background-size:100% 100%;
	-webkit-filter: blur(5px);
	-moz-filter: blur(5px);
	z-index: 0;
}
</style>

<body>
<br><br><br><br><br><br>
<div class="body"></div>
<div class="login-wrap"><br>
<img src="foto/Biznet_Logo.png" width="320" height="200" style="position:inherit; float:left;padding-bottom:10px;margin-left:60px;">
  

    
  <div class="form">
  <h2>Login Sebagai : </h2><br>
  <input type="submit" name="admin" value="Admin">
    <input type="submit" name="admin_visit" value="Admin Visiters">
    <br>
    <br>
    <input type="submit" name="karyawan" value="Karyawan">
    <input type="submit" name="agent" value="Agent">

  </div>
 <hr>
<h4><a href="https://www.facebook.com/vergihacker202">&copy; 2015 : Technical Support Operation. All Right Reserved.</a></h4>
</body>
</html>