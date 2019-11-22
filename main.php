<?php session_start(); ?>
<html>
	<head>
	<title>SHOP TENSION FREE</title>
	
	<link rel="stylesheet" href="css/style.css" media="all"/>
	</head>
	
	<body>

	<div class="main_wrapper">
	<div class="header_wrapper">   
	
		
		<img id="banner" src="images/logo.png">

	</div>
	<div class="topnav">
			 <a href="main.php">Home</a>
			 <a href="main.php">All Product</a>
			 <a href="login.php">Admin</a>
			 <a href="registeration.php">Sign Up</a>
			 <a href="cart_display.php">Shopping Cart</a>
			 <a href="logout.php">LOGOUT</a>
	<div class="search-container">
        <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit">Submit</button>
        </form>
        </div>
	</div>


	<div class="content_wrapper">
		
		<div id="sidebar">
		
		<div id="sidebar_title">CATEGORIES</div>
		
		<ul id="cats">		
				<?php
					include "db.php";
					$gets_product = "select * from products";
					
					$run_cats = mysql_query($gets_product,$conn);
					if($run_cats===false)
					{
					die(mysql_error());
					}
					while($row_products=mysql_fetch_array($run_cats)){
						
						$product_id = $row_products['product_id'];
						$product_title = $row_products['product_title'];
						$product_category=$row_products['product_category'];
						echo "<li><a href='view.php?id=$product_category'>$product_category</a><li>";
						
					}
				mysql_close($conn);
				?>
				
		</ul>
		
		
		</div>
		
	
		<div id="content_area"> 

		
		
			
			<div id="product_box">

				<?php
				
				include "db.php";
				$gets_product = "select * from products";
					
					$run_cats = mysql_query($gets_product,$conn);
					if($run_cats===false)
					{
					die(mysql_error());
					}
					
					while($row_products=mysql_fetch_array($run_cats)){
			$pro_id=$row_products['product_id'];
			$pro_name=$row_products['product_title'];
			$pro_desc=$row_products['product_desc'];
			$pro_img=$row_products['product_img'];
			$pro_price=$row_products['product_price'];
			echo "
				<div id='single_product'>
					<h3 style='border:1px solid black;background:rgb(29, 198, 187);text-align:left'>Product Name:$pro_name <a href='cart.php?add_cart=$pro_id'><button style='float:right;'>Add To Cart</button></a></h3>
					<br><a href='details.php?pro_id=$pro_id' style='float:middle;'><img src='$pro_img' width='200' height='200' title='Click for more details'/></a>
					<h4>Price:&#8377; $pro_price</h4>
					
					
				</div>
			
			";
				}

  mysql_close($conn);      
?>
			</div>
		</div>
		
		</div>
		
	
		
	
	
	</div>
	</body>
	
</html>




		