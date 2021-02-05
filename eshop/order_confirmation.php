<?php 
   include('includes/home_header.php');
?>
<section class="bg-img1 txt-center p-lr-15 p-tb-150"
 style="background-image: url('images/blackcon.jpg');">
<h2 class="ltext-105 clgr txt-center">
Order Confirmation
</h2>
</section>

<section class="txt-center p-lr-15 p-tb-40">
<h2 class="ltext-105 cl0 txt-center">
<?php echo $_SESSION['customer_name']." ";?>, thank you for your order.
<p>We have received your order and will contact you as soon as your package is shipped.</p>
</h2>
</section>
<section class="txt-center p-lr-15 p-tb-40">
<h2 class="ltext-105 clgr txt-center">
Your order id : <?php echo $_GET['orderid'];?>
</h2>
</section>
<div class="continer pb-5">
<a href='index.php' class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
Back To Eshop
</a>
</div>
<?php include('includes/home_footer.php');?>