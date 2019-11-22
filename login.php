<!DOCTYPE html>
<html>
<head>
<style>
input[type=email], input[type=password] ,select{
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
#f1{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<title>LOGIN</title>
<link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
<header>
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
</div>
<br>
<b><center><h1>LOGIN</h1></center></b>
<br>
</header>
<center>
<div id="f1">
<form method="post" action="">
<fieldset>

<table width="400" border="0" cellpadding="10" cellspacing="10">

<tr>
<td style="font-weight: bold"><label for="email"><b>Email</b></label></td>
<td><input name="email" type="email" placeholder="Enter email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><label for="password"><b>Password</b></label></td>
<td><input name="password" type="password" placeholder="Enter Password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td>
  <input type="submit" name="submit" value="Login" />
</td>
</tr>
</table>
</fieldset>
</form>
</div>
</center>

<?php
include "db.php";
if(isset($_POST["submit"]))
{
$email = $_POST["email"];
$password = $_POST["password"];
 

		
		
	
		
		$insert_user = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
		$run_cats = mysql_query($insert_user,$conn);
		$count=mysql_num_rows($run_cats);
		if($count==1)
		{
		
		echo "<script type='text/javascript'>alert('login successfully!!!');window.location.href='admin.php';</script>";
		}
		else
		{
		echo "<script type='text/javascript'>alert('Wrong password');window.location.href='login.php'</script>";
		}

}
mysql_close($conn);
?>
</body>
</html>