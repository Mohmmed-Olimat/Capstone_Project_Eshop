<?php
	session_start();
	if (!isset($_SESSION['customer_id'])) {
		header("location:admin/login_Customer/Customer_login.php");
	}
	else {
		
	
	include('includes\home_class.php');
	$ord=new orders();
	$p= new Product();
	$Date=date("Y/m/d");
	$cust_id=$_SESSION['customer_id'];
	$ord->order_date =$Date;
	$ord->cust_id    =$cust_id;
	
	$ord->create();
	$lastid=$ord->lastId();
	//echo "last id:".$lastid;
	$total=0;
	if(isset($_SESSION['item'])){
	foreach ($_SESSION['item'] as $k => $v) {
		$data=$p->readById($k);
        $productSet=$data[0];
        $ord->order_id=$lastid;
        $ord->product_id=$k;
        $ord->product_qty=$v;
        $ord->creatorders_details();
        $subtotal=($productSet['pro_price'])*$v;
		$total+=$subtotal;

    }
}

	if(isset($lastid)){
		unset($_SESSION['item']);
	header("location:order_confirmation.php?orderid=$lastid");
}
}
  ?>

