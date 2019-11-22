<?php
				include "db.php";
				$gets_product = "select * from products";
					
					$run_cats = mysql_query($gets_product,$conn);
					if($run_cats===false)
					{
					die(mysql_error());
					}
					
					while($row_products=mysql_fetch_array($run_cats)){
			$pro_img=$row_products['product_img'];
			header("Content-type: image/jpg");
			echo "<img src='product_images/$pro_img'/>";
mysql_close($conn)
?>