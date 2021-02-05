<?php include('includes/home_header.php');?>
<section class="section-slide"> <!-- Slideer Start-->
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
</section>  <!-- Slideer End-->


<div class="sec-banner bg0 p-t-95 p-b-55" id="more"> <!-- Categories Div Start  -->
<div class="container">
	<div class="p-b-62">
	<h3 class="ltext-105 cl0 txt-center respon1">
	Categories
	</h3>
</div>

<div class="row"> <!-- Category -->
	<?php
	
	if($data=$cat->readAll()){
    foreach ($data as $key => $value) { ?>
<div class="col-md-6 p-b-30 m-lr-auto">
<div class="block1 wrap-pic-w">
<?php echo "<img src='admin/assets/img/category/{$value['cat_image']}' alt='IMG-BANNER' width='1200' height='500'>";?>
<?php echo "<a href='products.php?catid={$value['cat_id']}&name={$value['cat_name']}' class='block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3'>";?>
<div class="block1-txt-child1 flex-col-l">
<span class="block1-name ltext-103 trans-04 p-b-8 cl0">
<?php echo "{$value['cat_name']}"; ?>
</span>
<div class="block1-txt-child2 p-b-4 trans-05">
<span class="block1-info stext-100 trans-04 cl10">
<?php echo "{$value['cat_desc']}"; ?>
</span>
</div>
</div>
<div class="block1-txt-child2 p-b-4 trans-05">
<div class="block1-link ltext-101 cl0 trans-09">
Shop Now
</div>
</div>
</a>
</div>
</div>

<?php }} ?>



</div>
</div>
</div>  <!-- Categories Div End  -->

<section class="bg0 p-t-33 p-b-30">  <!-- All Products Section Start -->
<div class="container">
<div class="p-b-32">
	<h3 class="ltext-105 cl0 txt-center respon1">
	Products
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
<?php 
 if($data=$p->readAll()){
 	shuffle($data);
foreach ($data as $key => $value) { ?>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

<div class="block2">
<div class="block2-pic hov-img0">
<?php echo "<img src='admin/assets/img/product/{$value['pro_image']}' alt='IMG-PRODUCT' width='1200' height='400'>
<a href='product-detail.php?pid={$value['pro_id']}' class='block2-btn flex-c-m stext-103 cl1 size-102 bg1 bor2 hov-btn3 p-lr-15 trans-04'>
View
</a>";?>
</div>
<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l ">
<?php echo "<a href='product-detail.php?pid={$value['pro_id']}' class='stext-104 cl0 hov-cl0 trans-04 js-name-b2 p-b-6'>
{$value['pro_name']}
</a>";?>
<span class="stext-105 clblack">
$<?php echo $value['pro_price']; ?>
</span>
</div>

</div>
</div>
</div>



<?php }} ?>
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
</section> <!-- All Products Section End -->

<?php include('includes/home_footer.php') ?>
