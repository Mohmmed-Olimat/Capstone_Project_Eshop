<?php
	session_start();
	$id=$_GET['pid'];
	
   unset($_SESSION['item'][$id]);

   header("location:cart.php");






?>