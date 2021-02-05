<?php
session_start();

if (! $_SESSION['vendor_id'] )
{
    header("location:login_vendor/Vendor_login.php");

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vendor</title> 
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
    <style type="text/css">

    .top-navbar .navbar-brand
     {
    color: #fff;
    width: 260px;
    text-align: left;
    height: 60px;
    font-size: 24px;
    font-weight: 700;
    line-height: 30px;
    background: #0394fc;
    }

    .navbar-brand b.
    {
    color: #4BD28C;
    }

    .top-navbar .navbar-brand:hover
     {
        color: #FFFFFF;
        background-color: #0394fc;
     }

    .top-navbar .nav > li > a:hover, .top-navbar .nav > li > a:focus 
    {
        text-decoration: none;
        background-color: #e0e8f5 !important;
        color: #fff;
    }

    .nav .open > a, .nav .open > a:hover, .nav .open > a:focus 
    {
        background-color: #075CB3 !important;
        border-color: #075CB3 !important;

    }

    div#sideNav:hover 
    {
    color: #1f2837;
    }

    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus 
    {
    background-color: #0394fc !important;
    }

    #sideNav
    {
    color: #0394fc;
    }

    .active-menu i
    {
        color: #0394fc !important;
    }

    .header .breadcrumb li a
    {
    font-size: 13px;
    font-size: 13px;
    text-decoration: none;
    color: #717171;
    text-decoration: none;
    color: #0394fc;
    }

    .taskList li:last-child 
    {
    padding-top: 5px;
    color: #0394fc;
    }

    @media(max-width:768px) {
      
     .navbar-header {
      background: #0394fc;
    }
}

.hpt-3{
            padding-top: 30px;
        }
    
    
 


    </style>
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
                <a class="navbar-brand waves-effect waves-dark" href="vendor.php"><i class="large material-icons">shopping_basket</i><strong><span class="h2 center">Eshop</span></strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>				
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" style="color: green;"><i class="fa fa-user fa-fw"></i>
                   <b>
                    <?php echo $_SESSION['vendor_name']; ?>
                        
                    </b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="login_Vendor/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
 
</ul>
  
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
 
</ul>  

	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                        <a class="active-menu waves-effect waves-dark" href="vendor.php">
                            <span class="h3">
                            <i class="fa fa-dashboard"></i>
                             Statistics
                         </span>
                         </a>
                    </li>
            <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                    <li>
                       <?php  echo "<a href='manage_vendor_profile.php?id={$_SESSION['vendor_id']}' class='active-menu waves-effect waves-dark'>";
                       ?>
                            <span class="h3">
                            <i class="fa fa-edit"></i> Manage Profile </span></a>
                    </li>
                  
                
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>
                     <li>
                        <?php  echo "<a href='manage_products_vendor.php?id={$_SESSION['vendor_id']}' class='active-menu waves-effect waves-dark'>";?>
                            <span class="h3"><i class="fa fa-edit"></i> Manage Products </span></a>
                    </li>
                    <div class="divider"></div><div class="divider"></div><div class="divider"></div>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
