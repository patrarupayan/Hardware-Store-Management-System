<?php session_start(); ?>
<?php
include "db.php";
$q=$_SESSION['u_id'];
$q1="select * from cart where u1_id='$q'";
