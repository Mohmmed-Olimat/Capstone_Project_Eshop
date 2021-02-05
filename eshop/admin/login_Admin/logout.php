<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['admin_name']);
header("location:Login.php");

?>