<?php
session_start();
include('home_class.php');
$p= new Product();
$vend= new Vendor();
$cat= new Category();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Eshop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/eShop_logo.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">

<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">

<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<style type="text/css"> /*my style*/

		html { scroll-behavior: smooth !important; } 
	a:hover{color:#F28D35!important;}
	button:hover{color:#F28D35!important;}
	ul>li:hover{color:#F28D35!important;}
	a{font-size: 18px !important;color:#F28D35}
	.cl0{
		color:#F28D35 !important;
	}
	.cl1{
		color:white !important;
	}

	.clblack{
		color: black;
	}
	.hov-cl1:hover{
		color:white !important;
	}
	.hov-cl0:hover{
		color:#F28D35 !important;
	}
	.bgblack{
		background-color:black!important;
	}
	.bg1{
		background-color:#F28D35!important;
	}
	.hov-bg1:hover{background-color:white !important;color:#F28D35 !important;}
	.hov-btn2:hover{
		background-color:white !important;
	}

	.hov-btn3:hover{
		background-color:black !important;
	}
	.icon-header-noti::after{content:attr(data-notify);background-color:red;}


	.header-cart-item-img img{width:100%}
	.header-cart-item-img::after{content:'\e870';font-family:Linearicons-Free;font-size:40px;font-weight: bold;color:red;opacity:0}

	.header-cart-item-name{font-size:16px;color:black;line-height:1.3;font-weight: bold;}
	.header-cart-item-info{font-size:14px;color:black;line-height:1.5}
	.header-cart-total{font-size:25px;color:green;font-weight: bold;}

	.main-menu-m{background-color:black}
	
	.item-gallery::after{background-color:#F28D35;}
	.item-gallery:hover:after{opacity:0.7;}

	.btn-back-to-top{width:45px;height:40px;background-color:#F28D35;opacity:0.9;}
	.symbol-btn-back-to-top{font-size:35px;color:#fff;line-height:1em}
	.btn-back-to-top:hover{opacity:1;background-color:black}

	.limiter-menu-desktop{background-color:black}

	.block1-txt:hover{background-color:black;opacity: 0.8;}

	
	.show-search:hover:after,.show-filter:hover:after{background-color:#F28D35;border-color:#F28D35}

	.table-shopping-cart{border-collapse:collapse;width:100%;min-width:680px;
		border:solid 3px;border-color: black}
	.table-shopping-cart tr{border-top:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6}
	.table-shopping-cart .column-1{width:133px;padding-left:25px;}
	.table-shopping-cart .column-2{width:220px;font-size:15px;color:black;}
	.table-shopping-cart .column-3{width:120px;font-size:16px;color:black;}
	.table-shopping-cart .column-4{width:145px;text-align:center;color:black;}
	.table-shopping-cart .column-5{width:172px;padding-right:50px;text-align:center;font-size:16px;color:black;}
	.table-shopping-cart .table_row{height:185px}
	.table-shopping-cart .table_row td{padding-bottom:20px}
	.table-shopping-cart .table_row td.column-1{padding-bottom:30px}
	.table-shopping-cart .table_head th{font-family:Poppins-Bold;font-size:13px;
		color:black;text-transform:uppercase;line-height:1.6;padding-top:15px;padding-bottom:15px;border-bottom: solid 1px;}
	.table-shopping-cart td{font-family:Poppins-Regular;color:#555;line-height:1.6}
	.cbor{
		border:solid 3px;border-color: black !important;
	}
	.clgr{
		color: green;
		font-weight: bold;
	}
	.clred{
		color: red;
	}

</style>
</head>
<body class="animsition">
 
<header class="header-v3">   <!-- Header Start -->

<div class="container-menu-desktop trans-03"> <!-- Menu-Desktop -->

<div class="wrap-menu-desktop">
<nav class="limiter-menu-desktop p-l-45">

<a href="index.php" class="logo">
<img src="images/icons/eShop_logo.png" alt="IMG-LOGO">
</a>

<div class="menu-desktop">
<ul class="main-menu">
<li>
<a href="index.php">Home</a>
</li>
<li>
<a href="index.php#more" class="smooth-goto">Categories</a>
</li>
<li>
<a href="allvendors.php">Vendors</a>
</li>
<li>
<a href="#footer" class="smooth-goto">Contact</a>
</li>
</ul>
</div>

<div class="wrap-icon-header flex-w flex-r-m h-full">
	<?php if (isset($_SESSION['customer_id'])){
	echo "<ul class='main-menu'><li class='active-menu'>
<a href='' class='flex-c-m trans-04 p-lr-25 cl0 hov-cl1'>{$_SESSION['customer_name']}</a>
<ul class='sub-menu'>
<li><a href='admin/login_Customer/update_account.php'>Edit Account</a></li>
<li><a href='admin/login_Customer/logout.php'>Log Out</a></li>
</ul>
</li></ul>";}
else{
echo "<a href='admin/login_Customer/Customer_login.php' class='flex-c-m trans-04 p-lr-25'>
Sign in
</a>";}
?>
<div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
<i class="zmdi zmdi-search"></i>
</div>
<div class="flex-c-m h-full p-r-25 bor6">
<?php 
if (isset($_SESSION['item'])){ 
$n=count($_SESSION['item']);
echo "<div class='icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart' data-notify='$n'>";}
else{ echo "<div class='icon-header-item cl0 hov-cl1 trans-04 p-lr-11'>";}
?>
<i class="zmdi zmdi-shopping-cart"></i>
</div>
</div>
<div class="flex-c-m h-full p-lr-19">
<div class="icon-header-item cl1 hov-cl2 trans-04 p-lr-11 js-show-sidebar">
<i class="zmdi zmdi-menu"></i>
</div>
</div>
</div>
</nav>
</div>
</div>

<div class="wrap-header-mobile"> <!-- Header-Mobile -->

<div class="logo-mobile">
<a href="index.php"><img src="images/icons/eShop_logo.png" alt="IMG-LOGO"></a>
</div>

<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
	<?php if (isset($_SESSION['customer_id'])){
	echo "<a href='' class='flex-c-m trans-04 p-lr-25'>
{$_SESSION['customer_name']}
</a>";}
	else {
			echo "<a href='admin/login_Customer/Customer_login.php' class='flex-c-m trans-04 p-lr-25'>
Sign in
</a>";
	}
?>
	<div class="icon-header-item cl0 hov-cl2 trans-04 p-l-22 p-r-11 js-show-modal-search">
<i class="zmdi zmdi-search"></i>
</div>
<div class="flex-c-m h-full p-r-5">
<?php
if (isset($_SESSION['item'])){
$n=count($_SESSION['item']);
echo "<div class='icon-header-item cl0 hov-cl2 trans-04 p-lr-11 icon-header-noti js-show-cart' data-notify='$n'>";}
else{ echo "<div class='icon-header-item cl0 hov-cl2 trans-04 p-lr-11'>";}
?>
<i class="zmdi zmdi-shopping-cart"></i>
</div>
</div>
</div>

<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</div>
</div>

<div class="menu-mobile"> <!-- Menu-Mobile -->
<ul class="main-menu-m">
<li>
<a href="index.php">Home</a>
</li>
<?php if (isset($_SESSION['customer_id'])){
echo "<li><a href='admin/login_Customer/update_account.php'>Edit Account</a></li>
<li><a href='admin/login_Customer/logout.php'>Log Out</a></li>";
}
?>
<li>
<a href="index.php#more" class="smooth-goto">Categories</a>
</li>
<li>
<a href="allvendors.php">Vendors</a>
</li>
<li>
<a href="#footer" class="smooth-goto">Contact</a>
</li>
</ul>
</div>

 <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
<button class="flex-c-m btn-hide-modal-search trans-04">
<i class="zmdi zmdi-close"></i>
</button>
<form class="container-search-header">
<div class="wrap-search-header">
<input class="plh0" type="text" name="search" placeholder="Search">
<button class="flex-c-m trans-04">
<i class="zmdi zmdi-search"></i>
</button>
</div>
</form>
</div>

</header>

<aside class="wrap-sidebar js-sidebar"> <!-- Sidebar -->
<div class="s-full js-hide-sidebar"></div>
<div class="sidebar flex-col-l p-t-22 p-b-25">
<div class="flex-r w-full p-b-30 p-r-27">
<div class="fs-35 lh-10 cl0 p-lr-5 pointer hov-cl3 trans-04 js-hide-sidebar">
<i class="zmdi zmdi-close"></i>
</div>
</div>
<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
<ul class="sidebar-link w-full">
<li class="p-b-13">
<a href="index.php" class="stext-102 cl0 hov-cl0 trans-04">
Home
</a>
</li>

<li class="p-b-13">
</li>
<li class="p-b-13">
<a href="index.php#more" class="stext-102 cl2 hov-cl0 trans-04 smooth-goto">
Categories
</a>
</li>
<li class="p-b-13">
<a href="allvendors.php" class="stext-102 cl2 hov-cl0 trans-04">
Vendors
</a>
</li>
<li class="p-b-13">
<a href="#" class="stext-102 cl2 hov-cl0 trans-04">
Help & FAQs
</a>
</li>
</ul>
<div class="sidebar-gallery w-full p-tb-30">
<span class="mtext-101 cl0">
@ Eshop
</span>
<div class="flex-w flex-sb p-t-36 gallery-lb">

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/ali.jpg" data-lightbox="gallery" style="background-image: url('images/ali.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/Wash.jpg" data-lightbox="gallery" style="background-image: url('images/Wash.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/asuslogo.png" data-lightbox="gallery" style="background-image: url('images/asuslogo.png');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/applelogo.png" data-lightbox="gallery" style="background-image: url('images/applelogo.png');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/iphone-12-pro-max.jpg" data-lightbox="gallery" style="background-image: url('images/iphone-12-pro-max.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/asuslaptop.jpg" data-lightbox="gallery" style="background-image: url('images/asuslaptop.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/LiquidCooler.jpg" data-lightbox="gallery" style="background-image: url('images/LiquidCooler.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/product-15.jpg" data-lightbox="gallery" style="background-image: url('images/product-15.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/Samsung_J70.jpg" data-lightbox="gallery" style="background-image: url('images/Samsung_J70.jpg');"></a>
</div>
</div>
</div>
<div class="sidebar-gallery w-full">
<span class="mtext-101 cl0">
About Us
</span>
<p class="stext-108 cl6 p-t-27">
Find everything you need in one place.

Visit eShop.
</p>
</div>
</div>
</div>
</aside>

<div class="wrap-header-cart js-panel-cart"> <!-- CART -->
<div class="s-full js-hide-cart"></div>
<div class="header-cart flex-col-l p-l-65 p-r-25">
<div class="header-cart-title flex-w flex-sb-m p-b-8">
<span class="mtext-103 cl0">
Your Cart
</span>
<div class="fs-35 lh-10 cl0 p-lr-5 pointer hov-cl2 trans-04 js-hide-cart">
<i class="zmdi zmdi-close"></i>
</div>
</div>
<div class="header-cart-content flex-w js-pscroll">
<ul class="header-cart-wrapitem w-full">
<?php
$total=0; 
if(isset($_SESSION['item'])){
	foreach ($_SESSION['item'] as $k => $v) {
		$data=$p->readById($k);
        $productSet=$data[0];
 echo "<li class='header-cart-item flex-w flex-t m-b-12'>
<a href='#'><div class='header-cart-item-img'>
<img src='admin/assets/img/product/{$productSet['pro_image']}' alt='IMG' width='60' height='70'>
</div></a>
<div class='header-cart-item-txt p-t-8'>
<a href='#' class='header-cart-item-name m-b-18 hov-cl0 trans-04'>
{$productSet['pro_name']}
</a>
<span class='header-cart-item-info'>
$v x$";echo "{$productSet['pro_price']}
</span>
</div>
</li>";
$subtotal=($productSet['pro_price'])*$v;
$total+=$subtotal;
}
}
?>
</ul>
<div class="w-full">
<div class="header-cart-total w-full p-tb-40">
Total: $ <?php if(isset($total)){echo $total;}?>
</div>
<div class="header-cart-buttons flex-w w-full">
<a href="cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn4 p-lr-15 trans-04 m-r-8 m-b-10">
View Cart
</a>
<a href="checkout.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn4 p-lr-15 trans-04 m-b-10">
Check Out
</a>
</div>
</div>
</div>
</div>
</div>