<?php
session_start(); 
$email = $_GET["email"];
$password = $_GET["password"];
$con = mysqli_connect("localhost","root","","onlinestore","3307");
$result = mysqli_query($con, "SELECT * FROM login WHERE Email='$email' && Password='$password'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$cid = $row['UID'];
$count = mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['CID'] = $cid;
	header("refresh:0;url=../views/dashboard.php");
}
else
{
	header("refresh:0;url=../views/loginAgain.php");
}
?>