<?php
@session_start();
include"../../Library/koneksi.php";
$perintah=new crud();
$perintah->koneksi();
$perintah->tampil("tbl_karyawan WHERE username='$_SESSION[username]'");
if (empty($_SESSION['username'])){
echo "<script>alert('Login Terlebih Dahulu');document.location.href='index.php'</script>";	
}
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_karyawan where username='$_SESSION[username]'"));

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIM Penjadwalan</title>
        	<link rel="icon" type="icon/image" href="../../foto/Biznet_Logo.png">        
            <link rel="stylesheet" href="../../css/vergi.css">

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <link href="../../css/timeline.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
 <link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Morris Charts CSS -->
    <link href="../../css/morris.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?menu=home">SIM Penjadwalan</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="?menu=data_diri"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="?menu=edit_data_diri&edit&id=<?php echo $tampil['id_karyawan'] ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="?menu=home"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                   
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Schedule Visit TS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="?menu=jadwal_visit_ts">Visit Single</a></li>
                                 <li><a href="?menu=jadwal_visit_backbone">Visit Multiple</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Input Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="?menu=report_visit_ts">Report Single</a></li>
                                 <li><a href="?menu=report_visit_backbone">Report Multiple</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                      
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Date : <?php echo date('l, d-M-Y') ?></h4>
                </div>	
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
             <div class="col-lg-12">
<?php
			switch (@$_GET['menu']){
				
				case "home";
				include "home.php" ;
				break;
				
				case"jadwal_visit_ts";
				include"jadwal_visit_ts.php";
				break;
				case"jadwal_visit_backbone";
				include"jadwal_visit_backbone.php";
				break;
				case"report_visit_ts";
				include"report_visit_ts.php";
				break;
				case"report_visit_backbone";
				include"report_visit_backbone.php";
				break;
				
			}
				?>
<br>

</div>
            </div>
  
        </div>
        </div>
        </div>
        <!-- /#page-content-wrapper -->
<h5 style="color:#428BCA;padding-top:15px;" align="center">&copy; 2015 : Team Magang SMK Wikrama Bogor. All Right Reserved.</h5>
    
       
    <!-- /#wrapper -->

     <!-- jQuery -->
    <script src="../../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../js/sb-admin-2.js"></script>

<script src="../../js/jquery.dataTables.min.js"></script>
<script src="../../js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
    	$('#example').DataTable();
		} );
        </script>
<br>
</body>

</html>
