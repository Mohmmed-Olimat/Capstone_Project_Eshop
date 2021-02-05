<?php 
   if(isset($_POST['submit'])){
   	header('location:checkout.php');
   }
   include('includes/home_header.php');
?>

<form class="bg0 p-t-150 p-b-85" method="post" action="">
<div class="container">
<div class="row">
<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
<div class="m-l-25 m-r--38 m-lr-0-xl">
<div class="wrap-table-shopping-cart">
<table class="table-shopping-cart">
<tr class="table_head bg1 cl0 ltext-104">
<th class="column-1 txt-center" colspan="2">Product</th>

<th class="column-3 txt-center">Price</th>
<th class="column-4 txt-center">Quantity</th>
<th class="column-5 txt-center">Total</th>
<th class="column-5 txt-center">Delete</th>
</tr>
<?php
$total=0;
if(isset($_SESSION['item'])){
	foreach ($_SESSION['item'] as $k => $v) {
		$data=$p->readById($k);
        $productSet=$data[0];
        echo "
<tr class='table_row'>
<td class='column-1 txt-center'>
<div>
<img src='admin/assets/img/product/{$productSet['pro_image']}' alt='IMG' width='60' height='70'>
</div>
</td>
<td class='column-2 txt-center'><a href='product-detail.php?pid={$productSet['pro_id']}'>{$productSet['pro_name']}</a></td>
<td class='column-3 txt-center'>$ {$productSet['pro_price']}</td>
<td class='column-4 center'>$v</td>
<td class='column-5 txt-center'>$".$v*$productSet['pro_price']."</td>
<td class='column-5 txt-center'><a href='deletecart.php?pid={$productSet['pro_id']}' class='clred'>Delete</a></td>
</tr>";
$subtotal=($productSet['pro_price'])*$v;
$total+=$subtotal;
}
}
?>
</table>
</div>
<div class="flex-w flex-sb-m  p-t-18 p-b-15 p-l-300 p-lr-15-sm">
</div>
</div>
</div>
<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
<div class="cbor p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
<h4 class="mtext-109 cl2 p-b-30">
Cart Totals
</h4>


<div class="flex-w flex-t p-t-27 p-b-33">
<div class="size-208">
<span class="ltext-101 cl2">
Total:
</span>
</div>
<div class="size-209 p-t-1">
<span class="ltext-101 clgr">
$<?php if(isset($total)){echo $total;}?>
</span>
</div>
</div>
<!-- <input type="submit" class="flex-c-m ltext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="checkout" value="Checkout">  -->
<?php //echo "<a href='checkout.php' <button class='flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer'>Checkout</a>";?>
<!-- Checkout
</button> -->
<button type="submit" class="flex-c-m ltext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="submit">
Checkout
</button>
</div>
</div>
</div>
</div>

</form>
<?php include('includes/home_footer.php');?>