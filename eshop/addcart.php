<?php
	session_start();
	$id=$_GET['pid'];
	$qty=$_GET['qty'];
    $_SESSION['item'][$id]=$qty;

    header("location:product-detail.php?pid=$id");






?>