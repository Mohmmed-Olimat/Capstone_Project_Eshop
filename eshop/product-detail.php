<?php 
   include('includes/home_header.php');
  
   $id        =$_GET['pid'];
   $data      =$p->readById($id);

   $productDetail=$data[0];
   $vid       =$productDetail['vendor_id'];
   $data1      =$vend->readById($vid);
   $vendor=$data1[0];



?>



<section class="sec-product-detail bg0 p-t-165 p-b-60">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-7 p-b-30">
<div class="p-l-25 p-r-30 p-lr-0-lg">
<div class="wrap-slick3 flex-sb flex-w">
<div class="wrap-slick3-dots"></div>
<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
<div class="slick3 gallery-lb">
<?php echo "<div class='item-slick3' data-thumb='admin/assets/img/product/{$productDetail['pro_image']}'>";?>
<div class="wrap-pic-w pos-relative">
<?php echo "<img src='admin/assets/img/product/{$productDetail['pro_image']}' alt='IMG-PRODUCT'>
<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl1 bg1 hov-btn3 trans-04' href='admin/assets/img/product/{$productDetail['pro_image']}'>";?>
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
<?php echo "<h4 class='mtext-105 cl2 js-name-detail p-b-14'>
{$productDetail['pro_name']}
</h4>";?>
<span class="mtext-106 cl2">
$<?php echo $productDetail['pro_price']; ?>
</span>
<p class="stext-102 cl3 p-t-23">
<?php echo $productDetail['pro_desc']; ?>
</p>



<div class="p-t-66">
	<div class="flex-w flex-r-m p-b-10">
		<div class="size-203 flex-c-m respon6">
		Sold by :
		</div>
		<div class="size-204 respon6-next">
	<?php echo "<a href='vendor-detail.php?vid={$vendor['vendor_id']}'><button class='stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1'>
		{$vendor['vendor_name']}
		</button></a>";?> 
		
		
		</div>
		</div>

<div class="container">
	<form action="addcart.php" method="get">
<div class="flex-w flex-r-m p-b-10">
<div class="size-204 flex-w flex-m respon6-next">
<div class="wrap-num-product flex-w m-r-20 m-tb-10">
<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
<i class="fs-16 zmdi zmdi-minus"></i>
</div>
<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="1">
<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
<i class="fs-16 zmdi zmdi-plus"></i>
</div>
</div>
<?php echo "<button class='flex-c-m stext-101 cl1 size-101 bg1 bor1 hov-btn3 p-lr-15 trans-04' name='pid' value='$id'>
Add to cart
</button>";?>
<?php if(isset($c)){ echo "<div class='h4 alert alert-success'>$c</div>";}?>
</div>
</div>
</form>
</div>

</div>
</div>
</div>
</div>

</div>

</section>



<?php include('includes/home_footer.php');?>

