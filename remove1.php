<?php 
include "db.php";
		
					if(isset($_GET['pro_id'])){
					
					$product_id=$_GET['pro_id'];
					
					$get_product = "delete from cart where p_id='$product_id'";
					
					$run_products= mysql_query($get_product,$conn);
			}
mysql_close($conn);
?>
<?php    
header('Location: cart_display.php');    
?>
