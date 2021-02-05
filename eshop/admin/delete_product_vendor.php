<?php 

	include('includes/productsClass.php');
    $x = new Product();
	$id =$_GET['id'];
	$vid=$_GET['vid'];

	$x->delete($id);

	header("location:manage_products_vendor.php?id=$vid");