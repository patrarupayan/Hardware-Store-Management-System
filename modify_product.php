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
			 <a href="modify.php">Home</a>
		<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
		</div>		
				<?php
include "db.php";
		
					
					if(isset($_POST["pro_id"])){
					
					$product_id=$_POST["pro_id"];

					$gets_product = "select * from products where product_id='$product_id' ";
					
					$run_products= mysql_query($gets_product,$conn);
					if($run_products===false)
					{
					die(mysql_error());
					}
					
					while($row_products=mysql_fetch_array($run_products)){
			$pro_name=$row_products['product_title'];
			$pro_desc=$row_products['product_desc'];
			$pro_img=$row_products['product_img'];
			$pro_price=$row_products['product_price'];
}
}
mysql_close($conn);
?>  
<form action="" method="post">

Product ID:<input type="text" name="product_id" value="<?php echo "$product_id";?>"/><br>
Product Name:<input type="text" name="product_name" value="<?php echo "$pro_name";?>"/><br>
Product Dscription:<input type="text" name="product_desc" value="<?php echo "$pro_desc";?>"/><br>
Product Image Address:<input type="text" name="product_image" value="<?php echo "$pro_img";?>"/><br>
Product Price:<input type="text" name="product_price" value="<?php echo "$pro_price";?>"/><br>
<input type="submit" name="submit" value="update" />
</form>						
		
		</div> 
</body>
</html>
<?php
include "db.php";

	if(isset($_POST['submit']))
{
		$product_id=$_POST['product_id'];
		$product_name=$_POST['product_name'];
		$product_desc=$_POST['product_desc'];
		$product_price=$_POST['product_price'];
		$product_image=$_POST['product_image'];
$update_post="UPDATE products SET product_title='$product_name',product_img='$product_image',product_desc='$product_desc',product_price='$product_price' WHERE product_id='$product_id'";
$run_cats=mysql_query($update_post,$conn);
if($run_cats)
{
echo "Record Updated successfully.";
}
else
{
echo "Record not updated";
}
}
else
{
echo "Press the update button to update the data";
}
?>