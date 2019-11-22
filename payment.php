<?php 
include "db.php";
$cart_products = " truncate table cart ";
$run_carts = mysql_query($cart_products,$conn);

header('Location: main.php'); 
mysql_close($conn);
?>