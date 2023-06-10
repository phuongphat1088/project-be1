<?php 
session_start();
unset($_SESSION['cart']);
header("location:cart.php?status=buy");