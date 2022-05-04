<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
// SQL query to select data from database
$sql = "SELECT * FROM shipping_address WHERE CID = '$cid'";
$result = mysqli_query($con,$sql);
while (($rows = mysqli_fetch_assoc($result)))
{
	$dbsaname = $rows["SAName"];
}
$satype = $_GET["satype"];
$recepient = $_GET["recepient"];
$street = $_GET["street"];
$snum = $_GET["snum"];
$city = $_GET["city"];
$zip = $_GET["zip"];
$state = $_GET["state"];
$country = $_GET["country"];

if($satype != $dbsaname)
{
	$s = mysqli_multi_query($con, "INSERT INTO shipping_address (CID, SAName, RecepientName, Street, SNumber, City, Zip, State, Country) VALUES ('$cid', '$satype', '$recepient', '$street', '$snum', '$city', '$zip', '$state', '$country');");

	echo "Shipping Address added successfully";

	 header("refresh:5;url=../views/dashboard.php");

}

else {

	echo "Please use a shipping address with different Address type, This address type already exists..";

	header("refresh:5;url=../views/addSAddr.php");
}
?>