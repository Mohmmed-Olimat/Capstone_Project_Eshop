<?php
session_start();

if (! $_SESSION['id'] )
{
    header("location:login_Admin/Login.php");

}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.php"><i class="large material-icons">shopping_basket</i><strong><span class="h2 center">Eshop</span></strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>


        </nav>
		<!-- Dropdown Structure -->

 
</ul>  

	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                        <a class="active-menu waves-effect waves-dark" href="index.php">
                            <span class="h3">
                            <i class="fa fa-dashboard"></i>
                             Dashboard
                         </span>
                         </a>
                    </li>
            <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                        <a href="manage_admin.php" class="active-menu waves-effect waves-dark">
                            <span class="h3">
                                <i class="fa fa-edit"></i>
                                 Manage Admins
                             </span>
                              </a>
                    </li>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                        <a href="manage_vendors.php" class="active-menu waves-effect waves-dark">
                            <span class="h3">
                            <i class="fa fa-edit"></i> Manage Vendors </span></a>
                    </li>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                        <a href="manage_customers.php" class="active-menu waves-effect waves-dark"><span class="h3"><i class="fa fa-edit"></i>Manage Customers</span> </a>
                    </li>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                        <a href="manage_category.php" class="active-menu waves-effect waves-dark">
                            <span class="h3"><i class="fa fa-edit"></i>Manage Categories</span> </a>
                    </li>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                     <li>
                        <a href="manage_products.php" class="active-menu waves-effect waves-dark"><span class="h3"><i class="fa fa-edit"></i> Manage Products </span></a>
                    </li>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
