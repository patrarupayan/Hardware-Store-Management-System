<!DOCTYPE>

<html>
	<head>
<link rel="stylesheet" href="css/style.css" media="all"/>
		<title>Modify Product</title>
		
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
		<br><br><form method='post' action='modify_product.php'>
		<center><table align="center" width="700" border="5" bgcolor="#f2f2f2">
		<tr>
				<td><b>PRODUCT ID:</b></td></tr>
				<tr><td><input id="f1" type="text" placeholder="Enter the id of product to be modified" name="pro_id" id="pro_id" size="60" />
			</tr>
		<tr>
				<td><input type='submit' value='Enter'></td>
			</tr>
		</table><center>
		</form>
	</div>
	
	</body>

</html>