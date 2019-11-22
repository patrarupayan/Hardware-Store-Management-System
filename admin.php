<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<link rel="stylesheet" href="css/style.css" media="all"/>
</head>
<body onload="startTime()">
<div class="main_wrapper">
	<div class="header_wrapper">   
	
		
		<img id="banner" src="images/logo.png">

	</div>

<div class="topnav">
		<a href="#">WELCOME!!</a>
		<a href='#'><div id="txt"></div></a>
		<a href="login.php"><button onclick="alert('you have been Logout successfully');">LOG OUT</button></a>
		<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
		</div><div style="background-image:url('https://images.unsplash.com/photo-1520970014086-2208d157c9e2?ixlib=rb-0.3.5&s=49eb10fafcbac9d17acba8906b64a79a&auto=format&fit=crop&w=1350&q=80');background-repeat:no-repeat;background-size:cover;height:100%">
<center><br><br><a href="insert_product.php"><button class="button button2">Insert</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="remove_product.php"><button class="button button2">Remove</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="modify.php"><button class="button button2">MODIFY</button></a></center>
</div>
</div>
</body>
</html>