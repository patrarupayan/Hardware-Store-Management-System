<?php session_start(); ?>
<!DOCTYPE>

<html>
	<head>
	<title>My Online Shopping Website</title>
<style>
#ag{
background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
#ag:hover {
    opacity: 0.8;
</style>
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
	
			 <a href="main.php">Home</a>
			 <a href="main.php">All Product</a>
			 <a href="#">My Account</a>
			 <a href="#">Sign Up</a>
			 <a href="#">Contact Us</a>
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
					$p=$_SESSION['u_id'];
					include "db.php";
					$gets_product = "select * from cart where u1_id='$p'";
					
					$run_cats = mysql_query($gets_product,$conn);
					
					while($row_products=mysql_fetch_array($run_cats)){
						$pr_id=$row_products['p_id'];
					$gets_product = "select * from products where product_id='$pr_id'";
					
					$run_products= mysql_query($gets_product,$conn);
				
				while($row_products=mysql_fetch_array($run_products)){
						$product_id = $row_products['product_id'];
						$product_title = $row_products['product_title'];
						echo "<li><a href='#'>$product_title</a></li>";
						
					}
}
				mysql_close($conn);
				?>
		</ul>
		
		
		
		</div>
		
	
		<div id="content_area"> 

		
		
			<div id="shopping_cart">
			
			<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
			
			Welcome <?php ?>! <b style="color:yellow">Shopping Cart-</b>
			Total Item-<?php
			$p=$_SESSION['u_id'];
			include "db.php";
			$sql="SELECT p_id FROM cart where u1_id='$p'";
			if ($result=mysql_query($sql,$conn))
  {
  // Return the number of rows in result set
  $rowcount=mysql_num_rows($result);
  printf($rowcount);
  // Free result set
  mysql_free_result($result);
  }
			mysql_close($conn);
			?> 
			
			
			Total Price- <?php
			$p=$_SESSION['u_id'];
			include "db.php"; 
			$total=0;
			
						$cart_products = "select * from cart where u1_id='$p'";
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
			

			<div id="product_box1">

						<?php
						$p=$_SESSION['u_id'];
						include "db.php";
						$cart_products = "select * from cart where u1_id='$p'";
				$run_carts = mysql_query($cart_products,$conn);
				while($row_products=mysql_fetch_array($run_carts)){
			$pr_id=$row_products['p_id'];
			
				
				$gets_product = "select * from products where product_id='$pr_id'";
					
					$run_products= mysql_query($gets_product,$conn);
				
				while($row_products=mysql_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
			$pro_name=$row_products['product_title'];
			$pro_desc=$row_products['product_desc'];
			$pro_img=$row_products['product_img'];
			$pro_price=$row_products['product_price'];
	
			
			
			echo "
				<div id='single_product'>
					<h3 style='border:1px solid black;background:rgb(29, 198, 187);text-align:left'>Product Name:$pro_name<a href='remove1.php?pro_id=$pro_id'><button style='float:right'>REMOVE THE PRODUCT FROM CART</button></a></h3>
					<br><img src='$pro_img' height='180' width='180'/>
					<h4>Price:&#8377; $pro_price</h4>
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
				</div>
			
			";
				}
				}
mysql_close($conn);
?>
			<br>	
			<div id="single_product1">Total Amount to be paid- <?php
			$p=$_SESSION['u_id'];
			include "db.php"; 
			$total=0;
			
						$cart_products = "select * from cart where u1_id='$p'";
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
			</div>
			
				<div id='single_product1'>
				<a href="payment.php?"><button id='ag'>PROCEED TO PAY</button></a>
				</div>



			</div>
		</div>
		
		</div>
		
	
		
	
	</div>
	
	<!--Main Container ends here-->
	
	</body>
	
</html>