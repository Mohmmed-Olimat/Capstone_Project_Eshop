<?php
session_start();
unset($_SESSION['vendor_id']);
unset($_SESSION['vendor_name']);
unset($_SESSION['brand_name']);
header("location:Vendor_login.php");
?>

