<?php
session_start();
unset($_SESSION['customer_id']);
unset($_SESSION['customer_name']);
header("location:../../index.php");
?>

