<?php
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
$sql = "SELECT * FROM basket WHERE CID = '$cid'";
$result = mysqli_query($con,$sql);
$rows = mysqli_fetch_assoc($result);
$bid = $rows['BID'];
$sqlAll = "SELECT * FROM credit_card, shipping_address WHERE credit_card.StoredCardCID = '$cid' AND shipping_address.CID = '$cid'";
$resultAll = mysqli_query($con,$sqlAll);
$row = mysqli_fetch_assoc($resultAll);
$ccnum = $row['CCNumber'];
$saname = $row['SAName'];
$tdate = $_GET['tdate'];
$ttag = "Order Placed";

$s = mysqli_multi_query($con, "INSERT INTO transaction (BID, CCNumber, CID, SAName, TDate, TTag) VALUES ('$bid', '$ccnum', '$cid', '$saname', '$tdate', '$ttag')");

if($s) { 
    echo "Purchased successfully!!!";
    header("refresh:3;url=../views/transaction.php");
    }
  else {
    echo "ERROR: Please try again! Sorry $s. " 
                . mysqli_error($con);
    header("refresh:5;url=../views/basket.php");
  }
?>