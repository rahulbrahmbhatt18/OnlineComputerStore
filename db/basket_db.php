<?php
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
$sql = "SELECT * FROM basket WHERE CID = '$cid'";
$result = mysqli_query($con,$sql);
$rows = mysqli_fetch_assoc($result);
$bid = $rows['BID'];
$prqt = $_GET['prqt'];
$prid = $_GET['prid'];
$prprice = $_GET['prprice'];
$totalpr = $prqt * $prprice;

$s = mysqli_multi_query($con, "INSERT INTO appears_in (BID, PID, Quantity, PriceSold) VALUES ('$bid', '$prid', '$prqt', '$totalpr')");
  
  
  
  if($s) { 
    //echo "Changes saved successfully!!!";
    header("refresh:0;url=../views/basket.php");
    }
  else {
    echo "ERROR: Please try again! Sorry $s. " 
                . mysqli_error($con);
    header("refresh:5;url=../views/products.php");
  }
?>
