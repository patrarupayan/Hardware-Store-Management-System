<?php session_start(); ?>
<?php 
include "db.php";

if(isset($_GET['add_cart'])){
				$product_id=$_GET['add_cart'];
				$p=$_SESSION['u_id'];
				$q1="select * from cart where p_id='$product_id' and u1_id='$p'";
				$q2=mysql_query($q1,$conn);
				$count=mysql_num_rows($q2);
				if($count===0)
				{
				$q = "insert into cart (p_id,u1_id) 
				values ('$product_id','$p')";
		$run_q = mysql_query($q,$conn);
			}
else
{
echo "product alreaady present";
}
		
			}
mysql_close($conn);
?>
<?php    
header('Location: main.php');    
?>