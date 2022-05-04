<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
// SQL query to select data from database
$sql = "SELECT * FROM credit_card WHERE StoredCardCID = '$cid'";
$result = mysqli_query($con,$sql);
while (($rows = mysqli_fetch_assoc($result)))
{
	$dbccnum = $rows["CCNumber"];
}
$ccnum = $_GET["ccnum"];
$secnum = $_GET["secnum"];
$owner = $_GET["owner"];
$cctype = $_GET["cctype"];
$billaddr = $_GET["billaddr"];
$expdate = $_GET["expdate"];

if($ccnum != $dbccnum)
{
	$s = mysqli_multi_query($con, "INSERT INTO credit_card (CCNumber, SecNumber, OwnerName, CCType, BillAddress, ExpDate, StoredCardCID) VALUES ('$ccnum', '$secnum', '$owner', '$cctype', '$billaddr', '$expdate', '$cid');");

	echo "Card added successfully";

	 header("refresh:5;url=../views/dashboard.php");

}

else {

	echo "Please use a card with different Card Number, This card already exists..";

	header("refresh:5;url=../views/addCCard.php");
}
?>