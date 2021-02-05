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

	.icon-header-noti::after{content:attr(data-notify);background-color:red;}


	.header-cart-item-img img{width:100%}
	.header-cart-item-img::after{content:'\e870';font-family:Linearicons-Free;font-size:40px;font-weight: bold;color:red;opacity:0}

	.header-cart-item-name{font-size:16px;color:black;line-height:1.3;font-weight: bold;}
	.header-cart-item-info{font-size:14px;color:black;line-height:1.5}
	.header-cart-total{font-size:25px;color:green;font-weight: bold;}

	.main-menu-m{background-color:#F28D35}
	
	
	.btn-back-to-top{width:45px;height:40px;background-color:#F28D35;opacity:0.9;}
	.symbol-btn-back-to-top{font-size:35px;color:#fff;line-height:1em}
	.btn-back-to-top:hover{opacity:1;background-color:black}

	.limiter-menu-desktop{background-color:black}

	.block1-txt:hover{background-color:black;opacity: 0.8;}

	
	.show-search:hover:after,.show-filter:hover:after{background-color:#F28D35;border-color:#F28D35}

</style>
</head>
<body class="animsition">

<header class="header-v3">

<div class="container-menu-desktop trans-03">

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
<a href="">Categories</a>
</li>
<!-- <li class="label1" data-label1="hot">
<a href="shoping-cart.html">Features</a>
</li> -->
<li>
<a href="">Vendors</a>
</li>
<li>
<a href="">About</a>
</li>
<li>
<a href="">Contact us</a>
</li>
</ul>
</div>

<div class="wrap-icon-header flex-w flex-r-m h-full">
	<a href="#" class="flex-c-m trans-04 p-lr-25">
Sign in <!-- Hello Mohmmed olimat -->
</a>
	<div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
<i class="zmdi zmdi-search"></i>
</div>
<div class="flex-c-m h-full p-r-25 bor6">
<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="5">
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

<div class="wrap-header-mobile">

<div class="logo-mobile">
<a href="index.php"><img src="images/icons/eShop_logo.png" alt="IMG-LOGO"></a>
</div>

<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
		<a href="#" class="flex-c-m trans-04 p-lr-25">
Sign in <!-- Hello Mohmmed olimat -->
</a>
	<div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
<i class="zmdi zmdi-search"></i>
</div>
<div class="flex-c-m h-full p-r-5">
<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
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

<div class="menu-mobile">
<ul class="main-menu-m">
<li>
<a href="index.php">Home</a>


</li>
<li>
<a href="#">Categories</a>
</li>
<!-- <li>
<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
</li> -->
<li>
<a href="#">Vendors</a>
</li>
<li>
<a href="#">About</a>
</li>
<li>
<a href="#">Contact us</a>
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

<aside class="wrap-sidebar js-sidebar">
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
<a href="index.php" class="stext-102 cl0 hov-cl1 trans-04">
Home
</a>
</li>

<li class="p-b-13">
<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
My Account
</a>
</li>
<li class="p-b-13">
<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
Categories
</a>
</li>
<li class="p-b-13">
<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
Vendors
</a>
</li>
<li class="p-b-13">
<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
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
<a class="item-gallery bg-img1" href="images/gallery-05.jpg" data-lightbox="gallery" style="background-image: url('images/gallery-05.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/ali.jpg" data-lightbox="gallery" style="background-image: url('images/ali.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/gallery-07.jpg" data-lightbox="gallery" style="background-image: url('images/gallery-07.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/ali.jpg" data-lightbox="gallery" style="background-image: url('images/ali.jpg');"></a>
</div>

<div class="wrap-item-gallery m-b-10">
<a class="item-gallery bg-img1" href="images/ali.jpg" data-lightbox="gallery" style="background-image: url('images/ali.jpg');"></a>
</div>
</div>
</div>
<div class="sidebar-gallery w-full">
<span class="mtext-101 cl0">
About Us
</span>
<p class="stext-108 cl6 p-t-27">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis.
</p>
</div>
</div>
</div>
</aside>

<div class="wrap-header-cart js-panel-cart">
<div class="s-full js-hide-cart"></div>
<div class="header-cart flex-col-l p-l-65 p-r-25">
<div class="header-cart-title flex-w flex-sb-m p-b-8">
<span class="mtext-103 cl0">
Your Cart
</span>
<div class="fs-35 lh-10 cl0 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
<i class="zmdi zmdi-close"></i>
</div>
</div>
<div class="header-cart-content flex-w js-pscroll">
<ul class="header-cart-wrapitem w-full">
<li class="header-cart-item flex-w flex-t m-b-12">
<a href="#delete"><div class="header-cart-item-img"><!-- size 60 X 80 -->
<img src="images/item-cart-01.jpg" alt="IMG">
</div></a>
<div class="header-cart-item-txt p-t-8">
<a href="#" class="header-cart-item-name m-b-18 hov-cl0 trans-04">
White Shirt Pleat
</a>
<span class="header-cart-item-info">
1 x $19.00
</span>
</div>
</li>
<li class="header-cart-item flex-w flex-t m-b-12">
<div class="header-cart-item-img">
<img src="images/item-cart-02.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt p-t-8">
<a href="#" class="header-cart-item-name m-b-18 hov-cl0 trans-04">
Converse All Star
</a>
<span class="header-cart-item-info">
1 x $39.00
</span>
</div>
</li>
<li class="header-cart-item flex-w flex-t m-b-12">
<div class="header-cart-item-img">
<img src="images/item-cart-03.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt p-t-8">
<a href="#" class="header-cart-item-name m-b-18 hov-cl0 trans-04">
Nixon Porter Leather
</a>
<span class="header-cart-item-info">
1 x $17.00
</span>
</div>
</li>
</ul>
<div class="w-full">
<div class="header-cart-total w-full p-tb-40">
Total: $75.00
</div>
<div class="header-cart-buttons flex-w w-full">
<a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn4 p-lr-15 trans-04 m-r-8 m-b-10">
View Cart
</a>
<a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn4 p-lr-15 trans-04 m-b-10">
Check Out
</a>
</div>
</div>
</div>
</div>
</div>

<section class="section-slide"> <!-- Slideer -->
<div class="wrap-slick1 rs2-slick1">
<div class="slick1">
<div class="item-slick1 bg-overlay1" style="background-image: url(images/slider-1.jpg);" data-thumb="images/thumb-01.jpg" data-caption="Women’s Wear">
<div class="container h-full">
<div class="flex-col-c-m h-full p-t-10 p-b-60 respon5">
<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
<span class="ltext-202 txt-center cl1 respon2">
The First Look 2021
</span>
</div>
<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
<h2 class="ltext-104 txt-center cl0 p-t-1 p-b-40 respon1">
Discover a new vision for screens
</h2>
</div>
<!-- <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
<a href="product.html" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
Shop Now
</a>
</div> -->
<div class="mt-5 pt-5">
<a href="#more" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04 smooth-goto">
see more <i class="fa fa-arrow-down pl-3"> </i>
</a>
</div>
</div>
</div>
</div>
<div class="item-slick1 bg-overlay1" style="background-image: url(images/slider-2.jpg);" data-thumb="images/thumb-02.jpg" data-caption="Men’s Wear">
<div class="container h-full">
<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
<span class="ltext-104 txt-center cl1 respon2">
 SAMSUNG
</span>
</div>
<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
Galaxy S21 Ultra 5G
</h2>
</div>
<!-- <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
<a href="product.html" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
Shop Now
</a>
</div> -->
<div class="mt-5 pt-5">
<a href="#more" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04 smooth-goto">
see more <i class="fa fa-arrow-down pl-3"> </i>
</a>
</div>
</div>
</div>
</div>
<div class="item-slick1 bg-overlay1" style="background-image: url(images/slider-3.jpg);" data-thumb="images/thumb-03.jpg" data-caption="Men’s Wear">
<div class="container h-full">
<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
<span class="ltext-104 txt-center cl1 respon2">
2021 ASUS TUF Dash F15
</span>
</div>
 <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
ULTRATHIN FOR THE WIN
</h2>
</div> 
<!-- <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
<a href="product.html" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
Shop Now
</a>
</div> -->
<div class="mt-5 pt-5">
<a href="#more" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04 smooth-goto">
see more <i class="fa fa-arrow-down pl-3"> </i>
</a>
</div>
</div>
</div>
</div>
<div class="item-slick1 bg-overlay1" style="background-image: url(images/slider-4.jpg);" data-thumb="images/thumb-03.jpg" data-caption="Men’s Wear">
<div class="container h-full">
<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
<span class="ltext-104 txt-center cl1 respon2">
<i class="fa fa-apple" aria-hidden="true"></i>Apple
</span>
</div>
 <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
iPhone 12 Pro Max with 5G
</h2>
</div> 
<!-- <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
<a href="product.html" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
Shop Now
</a>
</div> -->
<div class="mt-5 pt-5">
<a href="#more" class="flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04 smooth-goto">
see more <i class="fa fa-arrow-down pl-3"> </i>
</a>
</div>
</div>
</div>
</div>
</div>

</div>
</section>


<div class="sec-banner bg0 p-t-95 p-b-55" id="more">
<div class="container">
	<div class="p-b-32">
	<h3 class="ltext-105 cl0 txt-center respon1">
	Categories Overview
	</h3>
</div>

<div class="row"> <!-- Category -->
<div class="col-md-6 p-b-30 m-lr-auto">

<div class="block1 wrap-pic-w">
<img src="images/banner-04.jpg" alt="IMG-BANNER">
<a href="#" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 ">
<div class="block1-txt-child1 flex-col-l">
<span class="block1-name ltext-103 trans-04 p-b-8">
Women
</span>
<span class="block1-info stext-102 trans-04 cl0">
New Trend
</span>
</div>
<div class="block1-txt-child2 p-b-4 trans-05">
<div class="block1-link ltext-101 cl0 trans-09">
Shop Now
</div>
</div>
</a>
</div>
</div>
<div class="col-md-6 p-b-30 m-lr-auto">

<div class="block1 wrap-pic-w">
<img src="images/banner-05.jpg" alt="IMG-BANNER">
<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
<div class="block1-txt-child1 flex-col-l">
<span class="block1-name ltext-103 trans-04 p-b-8">
Men
</span>
<span class="block1-info stext-102 trans-04 cl0">
New Trend
</span>
</div>
<div class="block1-txt-child2 p-b-4 trans-05">
<div class="block1-link ltext-101 cl0 trans-09">
Shop Now
</div>
</div>
</a>
</div>
</div>
<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">

<div class="block1 wrap-pic-w">
<img src="images/banner-07.jpg" alt="IMG-BANNER">
<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
<div class="block1-txt-child1 flex-col-l">
<span class="block1-name ltext-103 trans-04 p-b-8">
Watches
</span>
<span class="block1-info stext-102 trans-04 cl0">
Spring 2018
</span>
</div>
<div class="block1-txt-child2 p-b-4 trans-05">
<div class="block1-link ltext-101 cl0 trans-09">
Shop Now
</div>
</div>
</a>
</div>
</div>
<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">

<div class="block1 wrap-pic-w">
<img src="images/banner-08.jpg" alt="IMG-BANNER">
<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
<div class="block1-txt-child1 flex-col-l">
<span class="block1-name ltext-103 trans-04 p-b-8">
Bags
</span>
<span class="block1-info stext-102 trans-04 cl0">
Spring 2018
</span>
</div>
<div class="block1-txt-child2 p-b-4 trans-05">
<div class="block1-link ltext-101 cl0 trans-09">
Shop Now
</div>
</div>
</a>
</div>
</div>
<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">

<div class="block1 wrap-pic-w">
<img src="images/banner-09.jpg" alt="IMG-BANNER">
<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
<div class="block1-txt-child1 flex-col-l">
<span class="block1-name ltext-103 trans-04 p-b-8">
Accessories
</span>
<span class="block1-info stext-102 trans-04 cl0">
Spring 2018
</span>
</div>
<div class="block1-txt-child2 p-b-4 trans-05">
<div class="block1-link ltext-101 cl0 trans-09">
Shop Now
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>

<section class="bg0 p-t-23 p-b-130">
<div class="container">
<div class="p-b-32">
	<h3 class="ltext-105 cl0 txt-center respon1">
	Products Overview
	</h3>
</div>

<div class="flex-w flex-sb-m p-b-52">
<div class="flex-w flex-l-m filter-tope-group m-tb-10">
<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
All Products
</button>

</div>

<div class="flex-w flex-c-m m-tb-10">
<div class="flex-c-m stext-106 cl0 size-107 bor4 pointer hov-btn1 trans-04 m-tb-4 js-show-search">
<i class="icon-search cl0 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
Search
</div>
</div>

<div class="dis-none panel-search w-full p-t-10 p-b-15">
<div class="bor8 dis-flex p-l-15">
<button class="size-113 flex-c-m fs-16 cl0 hov-cl0 trans-04">
<i class="zmdi zmdi-search"></i>
</button>
<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
</div>
</div>
</div>



<div class="row isotope-grid"> <!-- pro-grid -->


<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/ali1.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="product-detail.html" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Wash
</a>
<span class="stext-105 clblack">
$25.50
</span>
</div>

</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">	
<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/product-11.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="#" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Classic Trench Coat
</a>
<span class="stext-105 clblack">
$75.00
</span>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">

<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/product-06.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="product-detail.html" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Vintage Inspired Classic
</a>
<span class="stext-105 clblack">
$93.20
</span>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">

<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/ali1.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="#" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Converse All Star Hi Plimsolls
</a>
<span class="stext-105 clblack">
$75.00
</span>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/iphone-12-pro-max.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="product-detail.html" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Herschel supply
</a>
<span class="stext-105 clblack">
$63.16
</span>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/product-12.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="#" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Herschel supply
</a>
<span class="stext-105 clblack">
$63.15
</span>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">

<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/product-15.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="product-detail.html" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Mini Silver Mesh Watch
</a>
<span class="stext-105 clblack">
$86.85
</span>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
<div class="block2">
<div class="block2-pic hov-img0">
<img src="images/Wash1.jpg" alt="IMG-PRODUCT" width="1200" height="400">
<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
 View
</a>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<a href="product-detail.html" class="stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6">
Herschel supply
</a>
<span class="stext-105 clblack">
$63.15
</span>
</div>
</div>
</div>
</div>


</div> <!-- grid end -->

<!-- <div class="flex-c-m flex-w w-full p-t-38">
<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
1
</a>
<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
2
</a>
</div> -->
</div>
</section>


<footer class="bgblack p-t-75 p-b-32"><!-- Footer Start -->
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-3 p-b-50">
<h4 class="stext-301 cl0 p-b-30">
Categories
</h4>
<ul>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Women
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Men
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Shoes
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Watches
</a>
</li>
</ul>
</div>
<div class="col-sm-6 col-lg-3 p-b-50">
<h4 class="stext-301 cl0 p-b-30">
Help
</h4>
<ul>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Track Order
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Shipping
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
FAQs
</a>
</li>
</ul>
</div>
<div class="col-sm-6 col-lg-3 p-b-50">
<h4 class="stext-301 cl0 p-b-30">
GET IN TOUCH
</h4>
<p class="stext-107 cl7 size-201">
Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
</p>
<div class="p-t-27">
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-facebook"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-instagram"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-twitter"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-pinterest-p"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-youtube-play"></i>
</a>
</div>
</div>
</div>
<div class="p-t-40">

<p class="stext-107 cl6 txt-center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is from <a href="https://colorlib.com/" target="_blank"> Colorlib </a>Edited by <a href="" target="_blank"> Olimat </a>

</p>
</div>
</div>
</footer>

<div class="btn-back-to-top" id="myBtn">
<span class="symbol-btn-back-to-top">
<i class="zmdi zmdi-chevron-up"></i>
</span>
</div>

<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
<div class="overlay-modal1 js-hide-modal1"></div>
<div class="container">
<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
<button class="how-pos3 hov3 trans-04 js-hide-modal1">
<img src="images/icons/icon-close.png" alt="CLOSE">
</button>
<div class="row">
<div class="col-md-6 col-lg-7 p-b-30">
<div class="p-l-25 p-r-30 p-lr-0-lg">
<div class="wrap-slick3 flex-sb flex-w">
<div class="wrap-slick3-dots"></div>
<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
<div class="slick3 gallery-lb">
<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
<div class="wrap-pic-w pos-relative">
<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">
<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
<i class="fa fa-expand"></i>
</a>
</div>
</div>
<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
<div class="wrap-pic-w pos-relative">
<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
<i class="fa fa-expand"></i>
</a>
</div>
</div>
<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
<div class="wrap-pic-w pos-relative">
<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
<i class="fa fa-expand"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-5 p-b-30">
<div class="p-r-50 p-t-5 p-lr-0-lg">
<h4 class="mtext-105 cl2 js-name-detail p-b-14">
Lightweight Jacket
</h4>
<span class="mtext-106 cl2">
$58.79
</span>
<p class="stext-102 cl3 p-t-23">
Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
</p>

<div class="p-t-33">
<div class="flex-w flex-r-m p-b-10">
<div class="size-203 flex-c-m respon6">
Size
</div>
<div class="size-204 respon6-next">
<div class="rs1-select2 bor8 bg0">
<select class="js-select2" name="time">
<option>Choose an option</option>
<option>Size S</option>
<option>Size M</option>
<option>Size L</option>
<option>Size XL</option>
</select>
<div class="dropDownSelect2"></div>
</div>
</div>
</div>
<div class="flex-w flex-r-m p-b-10">
<div class="size-203 flex-c-m respon6">
Color
</div>
<div class="size-204 respon6-next">
<div class="rs1-select2 bor8 bg0">
<select class="js-select2" name="time">
<option>Choose an option</option>
<option>Red</option>
<option>Blue</option>
<option>White</option>
<option>Grey</option>
</select>
<div class="dropDownSelect2"></div>
</div>
</div>
</div>
<div class="flex-w flex-r-m p-b-10">
<div class="size-204 flex-w flex-m respon6-next">
<div class="wrap-num-product flex-w m-r-20 m-tb-10">
<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
<i class="fs-16 zmdi zmdi-minus"></i>
</div>
<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
<i class="fs-16 zmdi zmdi-plus"></i>
</div>
</div>
<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
Add to cart
</button>
</div>
</div>
</div>

<div class="flex-w flex-m p-l-100 p-t-40 respon7">
<div class="flex-m bor9 p-r-10 m-r-11">
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
<i class="zmdi zmdi-favorite"></i>
</a>
</div>
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
<i class="fa fa-facebook"></i>
</a>
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
<i class="fa fa-twitter"></i>
</a>
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
<i class="fa fa-google-plus"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})

		$('.smooth-goto').on('click', function() {  
    $('html, body').animate({scrollTop: $(this.hash).offset().top - 50}, 1000);
    return false;
});
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>

<script src="vendor/parallax100/parallax100.js"></script>
<script>
        $('.parallax100').parallax100();
	</script>

<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>

<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"603f65acdfcedfa9","version":"2020.12.1","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:27:17 GMT -->
</html>