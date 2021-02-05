<?php
session_start();

if (! $_SESSION['id'] )
{
    header("location:login_Admin/Login.php");

}
	include('includes/adminClass.php');
    $x = new Admin();

    /*Check For Notification 'Registration Request'*/
    $Notifi=0;
    if($data=$x->approv()){
    	$Notifi=1;
    

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
    <style type="text/css">
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
                <a class="navbar-brand waves-effect waves-dark" href="index.php"><i class="large material-icons">shopping_basket</i><strong><span class="h2 center">Eshop</span></strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
                <!-- Notification start-->	
                <?php
                
                $cn;
                if($Notifi==0)	{	
                echo "	
				    <li>
                    <a class='dropdown-button waves-effect waves-dark' href='#!' data-activates='dropdown2'>
                    <i class='fa fa-bell fa-fw'></i><i class='material-icons right'>arrow_drop_down</i>
                     </a>
            </li> ";
            $cn=0;
        }
        else {
            echo "
           <li >
                    <a class='dropdown-button waves-effect waves-dark' href='#!' data-activates='dropdown2'>
                    
                    <i class='fa fa-bell fa-fw' style='color: red;'>!</i><i class='material-icons right' style='color: red;'>arrow_drop_down</i>
                
                     </a>
            </li>";
            $cn=1;
        }
            ?>
            <!-- Notification end -->
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1" style="color: green;"><i class="fa fa-user fa-fw"></i>
                   <b>
                    <?php echo $_SESSION['admin_name']; ?>
                        
                    </b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="login_Admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250"> <!-- Notification View-->
    <?php
    if($cn==0)
    {
 echo "<li>NO Notification</li>";
    }
    else {
    	 foreach ($data as $key => $value)
    {
		echo "<li><a href='Approval.php'><i class='fa fa-comment fa-fw'></i> {$value['brand_name']} wants to become a vendor<span class='pull-right text-muted small'>1 min</span></a></li><li class='divider'></li>";
 
    }
        
    }

  ?>
                            
  </ul>
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
 
</ul>  

	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" >
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

     

     		<div id="page-wrapper">
		  <div class="header hpt-3" id="totop"> 
                        <h1 class="page-header">
                            Dashboard
                        </h1>
						<ol class="breadcrumb">
					  
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

			
				
					
		 	<h1>Hi <?php echo $_SESSION['admin_name'];?></h1>
		 
				
                <div class="row hpt-3">
                    <?php
                        $data5=$x->NOOFCUSTOMERS();
                        $data5=$data5[0];
                        $data6=$x->NOOFVENDORS();
                        $data6=$data6[0];
                        $data7=$x->NOOFORDERS();
                        $data7=$data7[0];
                        $data8=$x->NOOFPRODUCTS();
                        $data8=$data8[0];

                    ?>
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="card-panel text-center">
                                            <h2>NO. OF CUSTOMERS</h2>
                                            <div class="easypiechart" id="easypiechart-blue" data-percent="100" >
                                            <span class="percent">
                                            <?php
                                            echo $data5['NUM'];
                                            ?></span>
                                            </div> 
                                        </div>
                                </div>
                            </div>


                             <div class="row hpt-3">
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="card-panel text-center">
                                            <h2>NO. OF VENDORS</h2>
                                            <div class="easypiechart" id="easypiechart-red" data-percent="100" >
                                                 <span class="percent">
                                            <?php
                                            echo $data6['NUM'];
                                            ?></span>
                                            </div> 
                                        </div>
                                </div>
                            </div>
                             <div class="row hpt-3">
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="card-panel text-center">
                                            <h2>NO. OF ORDERS</h2>
                                            <div class="easypiechart" id="easypiechart-teal" data-percent="100" >
                                                  <span class="percent">
                                            <?php
                                            echo $data7['NUM'];
                                            ?></span>
                                            </div> 
                                        </div>
                                </div>
                            </div>
                            <div class="row hpt-3">
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="card-panel text-center">
                                            <h2>NO. OF PRODUCTS</h2>
                                            <div class="easypiechart" id="easypiechart-orange" data-percent="100" >
                                                      <span class="percent">
                                            <?php
                                            echo $data8['NUM'];
                                            ?></span>
                                            </div> 
                                        </div>
                                </div>
                            </div>
			 
				
	       

	   
				
				
			
                </div>
                    
                                 <div class="fixed-action-btn horizontal ">
    <a class="btn-floating btn-large red" href="#totop">
      <i class="material-icons">navigation</i>
    </a>
    
  </div>
               <?php include("includes/admin_footer.php");?>