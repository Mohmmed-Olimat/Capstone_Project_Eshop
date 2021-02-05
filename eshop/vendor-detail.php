<?php include('includes/home_header.php');
	
   $vid       =$_GET['vid'];
   $data2      =$vend->readById($vid);
   $vendor=$data2[0];


?>

<section class="bg-img1 txt-center p-lr-15 p-tb-120" style="background-color: black">
<h2 class="ltext-105 cl0 txt-center">
<?php echo "{$vendor['vendor_name']}"; ?>
</h2>
</section>

<section class="bg0 p-t-75 p-b-0">
<div class="container">
<div class="row p-b-130">
<div class="col-md-7 col-lg-8">
<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
<h3 class="mtext-111 cl2 p-b-16">
About
</h3>
<p class="stext-113 cl6 p-b-26">
	<?php echo "{$vendor['brand_desc']}"; ?>

</p>
<p class="stext-113 cl6 p-b-26">
Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
</p>
<p class="stext-113 cl6 p-b-26">
Any questions? call us on <?php echo "{$vendor['vendor_mobile']}"; ?>
</p>
</div>
</div>
<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
<div class="how-bor1 ">
<div class="hov-img0">
<?php echo "<img src='admin/assets/img/brand/{$vendor['brand_img']}' alt='IMG'>";?>
</div>
</div>
</div>
</div>

</div>
</section>

<section class="bg0 p-t-0 p-b-30">  <!-- All Products By Vendor Section Start -->
<div class="container">
<div class="p-b-15">
	<h3 class="ltext-105 cl0 txt-center respon1">
	<?php echo "{$vendor['vendor_name']}";?>
	</h3>
</div>

<div class="flex-w flex-sb-m p-b-52">
<div class="flex-w flex-l-m filter-tope-group m-tb-10">
<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
 Our Products
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
 if($data=$p->readByvendorId($vendor['vendor_id'])){
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

</div>
</section> <!-- All Products By Vendor Section End -->


<?php include('includes/home_footer.php') ?>
