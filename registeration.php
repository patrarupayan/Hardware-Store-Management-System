<?php 
include "db.php";

?>

<!DOCTYPE html>
<html>
<head>
<style>
input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
#aa
{
width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box
}
input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    opacity: 0.8;
}
</style>
<title>Registeration for Online Shopping</title>
<link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
<div class="main_wrapper">
<!--Header Container starts here-->
	<div class="header_wrapper">   
	
		
		<img id="banner" src="images/logo.png">

	</div>
<div class="topnav">
			 <a href="main.php">Home</a>
			 <a href="main.php">All Product</a>
		<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
<header>

<b><center><h1>Online Shopping Website Registeration</h1></center></b><br>
</header>

<center>
<form method="post" action="">
<fieldset>
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td style="font-weight: bold"><label for="name">Name</label></td>
<td><input id='aa' name="name" type="text" placeholder="Enter your name" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><label for="email">Email</label></td>
<td><input name="email" type="email" placeholder="Enter your email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><label for="password">Password</label></td>
<td><input name="password" type="password" placeholder="Enter your password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="REGISTER" />
</div></td>
</tr>
</table>
</fieldset>
</form>

<?php
include "db.php";
if(isset($_POST["submit"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
 
$insert_user = "insert into users (name, email, password) 
		values ('$name','$email','$password')";
		
		$run_cats = mysql_query($insert_user,$conn);
		
	echo "<script>alert('REGISTERED SUCCESSFULLY!!!')</script>";
	header('Location: main.php');
}
mysql_close($conn);
?>






</body>
</html>