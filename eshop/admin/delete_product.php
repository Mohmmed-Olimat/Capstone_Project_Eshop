<?php 

	include('includes/productsClass.php');
    $x = new Product();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:manage_products.php");