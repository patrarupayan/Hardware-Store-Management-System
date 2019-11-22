<?php
include "db.php";
		
					
					if(isset($_POST["pro_id"])){
					
					$product_id=$_POST["pro_id"];

					$gets_product = "delete from products where product_id='$product_id' ";
					
					$run_products= mysql_query($gets_product,$conn);
			}
if(isset($_POST["pro_id"])){
					
					$product_id=$_POST["pro_id"];

					$gets_product = "delete from cart where p_id='$product_id' ";
					
					$run_products= mysql_query($gets_product,$conn);
			}
mysql_close($conn);
				?>
				<?php    
header('Location: remove_product.php');    
?>
