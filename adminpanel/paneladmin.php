<?php 
include("DBconnect.php");

session_start();
if(!$_SESSION["empid"])
{
header('Location:adminlogin.php');
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">Admin Panel- payroll Management system of Assam State Government </a>
        </div>
            
			
			<!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i>Bill display by Categories<b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="enqbillbyid.php" target="main">By Employee id</a>
                        </li>
                        <li>
                            <a href="enqbillbyorg.php" target="main">By Employee's organisation</a>
                        </li>
                        <li>
                            <a href="enqbillbydept.php" target="main">By Employee's department</a>
                        </li>
                    </ul>
                </li>
				
                  
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Employee info by Categories<b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="enqempbyid.php" target="main">By Employee id</a>
                        </li>
                        <li>
                            <a href="enqempbyorg.php" target="main">By Employee's organisation</a>
                        </li>
                        <li>
                            <a href="enqempbydept.php" target="main">By Employee's department</a>
                        </li>
                    </ul>
                </li>
                
				
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php  echo $row->ename; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="adminlogout.php" ><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                        <a href="enqpaystatment.php"  target="main"><i class="fa fa-fw fa-bar-chart-o"></i> Pay Statement </a>
                    </li>
                   
				   
				    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-table"></i> Enquiries <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
						
						 <li>
                                <a href="enqdept.php" target="main">Enquiry Department</a>
                         </li>
						  <li>
                                <a href="enqempinfo.php" target="main">Employee information</a>
                         </li>
						  <li>
                                <a href="enqpayscale.php" target="main">Pay scale </a>
                         </li>
						  <li>
                                <a href="enqe&d.php" target="main">Earning and Deduction</a>
                         </li>
						  <li>
                                <a href="enqbilldisp.php" target="main">Bill Display</a>
                         </li>
					    </ul>
					</li>
                    
					
					<li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Master data entry <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="entryempinfo.php" target="main">Employee info</a>
                            </li>
                            <li>
                                <a href="entrydeptinfo.php" target="main">Dept. info</a>
                            </li>
							 <li>
                                <a href="updatepayscale.php" target="main">Pay scale</a>
                            </li>
							 <li>
                                <a href="updateearning.php" target="main">Earning</a>
                            </li>
							 <li>
                                <a href="updatededuction.php" target="main">Deduction</a>
                            </li>
							 <li>
                                <a href="updateAI.php" target="main">Annual Increment</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <iframe frameborder="1" name="main" height="600" width="100%"></iframe>
                </div>
                <!-- /.row -->

               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
