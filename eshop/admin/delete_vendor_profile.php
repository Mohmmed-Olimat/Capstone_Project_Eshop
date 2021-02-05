<?php 

    include('includes/vendorClass.php');
    $x = new Vendor();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:login_Vendor/logout.php");