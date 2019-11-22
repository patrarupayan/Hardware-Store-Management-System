<!DOCTYPE>

<html>
	<head>
	<title>My Online Shopping Website</title>
	
	<link rel="stylesheet" href="css/style.css" media="all" />
	
	</head>
	
	<body>
	
	<!--Main Container starts here-->
	
	<div class="main_wrapper">
	
	<!--Header Container starts here-->
	<div class="header_wrapper">   
	
	
		<img id="banner" src="images/logo.png">

	</div>
	<!--Header ends here-->
	
	<!--Navigation starts here-->
	<div class="topnav">
	
		<a href="main.php">Home</a></li>
		<a href="main.php">All Product</a></li>
		<a href="#">My Account</a></li>
		<a href="#">Sign Up</a></li>
		<a href="cart_display.php">Shopping Cart</a></li>
		<a href="#">Contact Us</a></li>
		<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
		
		
		
		
	</div>
	<!--Navigation ends here-->
	
	<!--Content starts here-->
	<div class="content_wrapper">
		
		<!--Sidebar starts here-->
		<div id="sidebar">
		
		<div id="sidebar_title">Product</div>
		
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
						echo "<li><a href='#'>$product_title</a></li>";
						
					}
				mysql_close($conn);
				?>
		</ul>
		
		
		
		</div>
		
	
		<div id="content_area"> 


			<div id="shopping_cart">
			
			<span style="float:right; font-size:15px; padding:5px; line-height:40px;">
			
			Welcome <?php ?>! <b style="color:yellow">! <b style="color:yellow">Shopping Cart-</b>Total Item-<?php
			include "db.php";
			$sql="SELECT p_id FROM cart";
			if ($result=mysql_query($sql,$conn))
  {
  // Return the number of rows in result set
  $rowcount=mysql_num_rows($result);
  printf($rowcount);
  // Free result set
  mysql_free_result($result);
  }
			mysql_close();
			?> 
			
			
			Total Price- <?php
				include "db.php"; 
			$total=0;
			
						$cart_products = "select * from cart";
				$run_carts = mysql_query($cart_products,$conn);
				while($row_products=mysql_fetch_array($run_carts)){
			$pr_id=$row_products['p_id'];
			
				$gets_product = "select * from products where product_id='$pr_id'";
					
					$run_products= mysql_query($gets_product,$conn);
				
				while($row_products=mysql_fetch_array($run_products)){
			
			$pro_price=array($row_products['product_price']);
			$values =array_sum($pro_price);
			$total +=$values;
			
			
				}
				}
			echo "
					$total
			
			";
			mysql_close($conn);
			?>
			
			
			</span>
			
			
			</div>

		<div id="product_box">


				<?php
				include "db.php";
				if(isset($_GET['pro_id'])){
					
					$product_id=$_GET['pro_id'];

					$gets_product = "select * from products where product_id='$product_id'";
					
					$run_products= mysql_query($gets_product,$conn);
				
				while($row_products=mysql_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
			$pro_name=$row_products['product_title'];
			$pro_desc=$row_products['product_desc'];
			$pro_img=$row_products['product_img'];
			$pro_price=$row_products['product_price'];
	
			
				
			
			echo "
				<div id='single_product'>
					<h3 style='border:1px solid black;background:rgb(29, 198, 187);text-align:left'>Product Name:$pro_name<a href='cart.php?add_cart=$pro_id'><button style='float:right'>Add To Cart</button></a>
				</h3>
					<br><img src='$pro_img' height='180' width='180'/>
					<h4>Price: &#8377; $pro_price</h4>
					<h5>$pro_desc</h5>
					<br><a href='main.php' style='float:middle;'>Go Back to home page</a>
					</div>
			
			";
				}
            
        
    }
    
	mysql_close($conn);			
?>
			
		</div>
		
		</div>
		
	
		<div id="footer">     

			<h2 style="text-align:center; padding-top:30px">&copy; 2016 by www.professionalcipher.blogspot.com </h2>


		</div>
	
	</div>
	</div>
	
	<!--Main Container ends here-->
	
	</body>
	
</html>




		