<?php
@session_start();
include"../../Library/koneksi.php";
$perintah=new crud();
$perintah->koneksi();
@$perintah->tampil("tbl_agent WHERE username='$_SESSION[username]'");
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM tbl_agent where username='$_SESSION[username]'"));

if (empty($_SESSION['username'])){
        echo "<script>alert('Login Terlebih Dahulu');document.location.href='index.php'</script>";	
        }
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
                        <li><a href="?menu=ubah_password&edit&id=<?php echo $tampil['username'] ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Form Input Request<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="?menu=itc"> Request Single</a></li>
                                 <li><a href="?menu=itb"> Request Multiple</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> Antrian Troubleshoot<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                         <li>
                                    <a href="#">Troubleshoot Single <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="?menu=dtc">Single View All </a></li>	
                                         <li><a href="?menu=dca">Single By Area</a></li>
                                 
                                    </ul>
                                    
                                </li>
                                
                            </ul>
                            
                             <ul class="nav nav-second-level">
                                         <li>
                                    <a href="#">Troubleshoot Multiple <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="?menu=dtb">Multiple View All</a></li>                                       	<li><a href="?menu=dba">Multiple By Area</a></li>
                                    </ul></li>
                            </ul>
                            <!-- /.nav-second-level -->
                             <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> Schedule Visit TS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                         <li>
                                    <a href="#">Schedule Visit Single <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="?menu=dsc">Single View All </a></li>	
                                         <li><a href="?menu=dsvc">Single By Area</a></li>
                                 
                                    </ul>
                                    
                                </li>
                                
                            </ul>
                            
                             <ul class="nav nav-second-level">
                                         <li>
                                    <a href="#">Schedule Visit Multiple <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="?menu=dsb">Multiple View All</a></li>                                       	<li><a href="?menu=dsvb">Multiple By Area</a></li>
                                    </ul></li>
                            </ul>
                            <li>
                            <a href="?menu=contact"><i class="fa fa-phone fa-fw "> </i>  Contact Us</a>
                        </li>
                            
                           
                               </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Date : <?php echo date('l, d M Y') ?></h4>
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
                       						
                        case "itc";
                        include "input_listrequest_costumer.php" ;
                        break;	
											
                        case "itb";
                        include "input_listrequest_backbone.php" ;
                        break;	
                        case "dtc";
                        include "data_list_costumer.php" ;
                        break;
						    case "dtb";
                        include "data_list_backbone.php" ;
                        break;
						
                            case "dca";
                        include "data_costumer_area.php" ;
                        break;
                        case "dba";
                        include "data_backbone_area.php" ;
                        break;
							
						    case "dsc";
                        include "data_send_costumer.php" ;
                        break;	
						    case "dsb";
                        include "data_send_backbone.php" ;
                        break;
						
						case "dsvc";
                        include "data_send_costumer_area.php" ;
                        break;
						
						case "dsvb";
                        include "data_send_backbone_area.php" ;
                        break;	
                		case"ubah_password";
						include"ubah_password.php";
						break;
						case"contact";
						include"copyright.php";
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
<h5 style="color:#428BCA;padding-top:15px;" align="center"><a href="?menu=contact">&copy; 2015 : Team Magang SMK Wikrama Bogor. All Right Reserved.</a></h5>
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
		
		$(document).ready(function() {
    	$('#example2').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example3').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example4').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example5').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example6').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example7').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example8').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example9').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example10').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example11').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example12').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example13').DataTable();
		} );
		
		$(document).ready(function() {
    	$('#example14').DataTable();
		} );
        </script>
<br>
</body>
        
</html>
