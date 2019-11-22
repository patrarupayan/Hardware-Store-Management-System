<!DOCTYPE>

<html>
	<head>
		<link rel="stylesheet" href="css/style.css" media="all"/>
		<title>Inserting Product</title>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
		<style>
				.header_wrapper{
							width:auto;
							height:100px;
							margin:auto;
								}
				.main_wrapper{
							width:auto;
							height:auto;
							margin:auto;
							}
#f1{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius=4px;
    box-sizing: border-box;
}
input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius=4px;
    width: 100%;
}
input[type=submit]:hover {
    opacity: 0.8;
}
#f2{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	margin-left:200px;
	margin-right:200px;
}
		</style>
	</head>
	<body>
	

	<div class="main_wrapper">
	<!--Header Container starts here-->
	<div class="header_wrapper">   
	
		<img id="banner" src="images/logo.png">

	</div>
<div class="topnav">
			<a href="#">WELCOME!!!</a>
			 <a href="admin.php">HOME</a>
		<div class="search-container">

    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
		</div>
</div>
<div style="background-image:url('https://images.unsplash.com/photo-1520970014086-2208d157c9e2?ixlib=rb-0.3.5&s=49eb10fafcbac9d17acba8906b64a79a&auto=format&fit=crop&w=1350&q=80');background-repeat:no-repeat;background-size:cover;height:100%">
<br><center><h2><b>Insert New Product</b></h2></center><br>
	<div id="f2">
		<center><br>
		<form action="insert_product.php" method="post" enctype="multipart/form-data">
		
		
		
		<table width="800" border="2px" >
			
			<tr>
				<td><b>PRODUCT ID:</b></td></tr>
				<tr><td>
						<input id="f1" type="text" name="product_id" size="60" />

				</td>
			</tr>
			
			<tr>
				<td><b>PRODUCT NAME:</b></td></tr>
			<tr><td><input id="f1" type="text" name="product_name" size="60" />
			</tr>
			<tr>
				<td><b>Product Description:</b></td></tr>
				<tr><td><textarea id="f1" name="product_desc" cols="20" rows="10" ></textarea>
			</tr>
			<tr>
				<td><b>Product Image:</b></td></tr>
				<tr><td><input type="FILE" name="product_image"/>
			</tr>
			<tr>
				<td><b>Product Price:</b></td></tr>
				<tr><td><input id="f1" type="text" name="product_price" size="60" />
			</tr>
			<tr>
				<td><b>Product Stock:</b></td></tr>
				<tr><td><input id="f1" type="text" name="product_stock" size="60" />
			</tr>
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Insert"/>
			</tr>
		</table>
		</form>
	</center>
	</div>
	</div>
	</body>

</html>

<?php


	if(isset($_POST['insert_post']))
	{
	
		//$product_id=$_POST['product_id'];
		$product_name=$_POST['product_name'];
		$product_desc=$_POST['product_desc'];
		$product_price=$_POST['product_price'];
		$product_stock=$_POST['product_stock'];
		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];
		
		if($product_name=='' OR $product_desc=='' OR $product_price=='' OR $product_stock=='')
		{
			echo"<script>alert('INVALID PRODUCT!!!')</script>";
			exit();
		}
		
		
		//Uploading image to folder
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
		
		$insert_post = "insert into products (product_title, product_img, product_desc, product_price, product_stock) 
		values ('$product_name','$product_image','$product_desc','$product_price','$product_stock')";
		
		$run_cats = mysql_query($insert_post,$conn);
		
	echo "<script>alert('PRODUCT INSERTED SUCCESSFULLY!!!')</script>";
	

	}
	

?>

