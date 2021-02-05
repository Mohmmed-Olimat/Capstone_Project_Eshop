<?php 

	include('includes/customerClass.php');
    $x = new Customer();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:manage_customers.php");