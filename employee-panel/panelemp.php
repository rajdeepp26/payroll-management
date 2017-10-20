<?php 
include("DBconnect.php");

session_start();
if(!$_SESSION["empid"])
{
header('Location:emplogin.php');
}
$id=$_SESSION["empid"];
$rs=mysqli_query($con,"select ename from empinfo where empid='$id' ");
$row=mysqli_fetch_object($rs);
?> 
 
 
 
 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="adminpanel/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="adminpanel/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="adminpanel/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
<!--
.style3 {color: #333}
-->
    </style>
</head>

<body>
<span class="style3"></span>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Employee Panel- payroll Management system of Assam State Government </a>
        </div>
            
			
			<!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" >
				<li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user" ></i> <?php  echo $row->ename; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="emppassword.php" target="main" ><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li class="divider" ></li>
                        <li class="active">
                            <a href="emplogout.php" ><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="enqemppaystat.php"  target="main"><i class="fa fa-fw fa-bar-chart-o"></i> Pay Statement </a>
                    </li>
                   
                    <li>
                        <a href="enqemppanelinfo.php" target="main"><i class="fa fa-fw fa-file"></i> Information</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
			<p><b>Welcome</b> <i><b><?php  echo $row->ename; ?> !</b></i></p>
                <!-- Page Heading -->
                <div class="row">
                   <iframe frameborder="1" name="main" height="600" width="100%"> </iframe>
				   
				  
                </div>
                <!-- /.row -->

               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
	
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="adminpanel/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="adminpanel/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="adminpanel/js/plugins/morris/raphael.min.js"></script>
    <script src="adminpanel/js/plugins/morris/morris.min.js"></script>
    <script src="adminpanel/js/plugins/morris/morris-data.js"></script>

</body>

</html>
