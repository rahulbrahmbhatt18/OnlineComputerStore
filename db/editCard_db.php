<?php
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
  $ccnum = $_GET["ccnum"];
  $secnum = $_GET["secnum"];
  $owner = $_GET["owner"];
  $cctype = $_GET["cctype"];
  $billaddr = $_GET["billaddr"];
  $expdate = $_GET["expdate"];

  
  $s = mysqli_multi_query($con, "UPDATE credit_card SET SecNumber = '$secnum', OwnerName = '$owner', CCType = '$cctype', BillAddress = '$billaddr', ExpDate = '$expdate' WHERE StoredCardCID = '$cid' AND CCNumber = $ccnum;");
  
  
  
  if($s) { 
    echo "Changes saved successfully!!!";
    header("refresh:3;url=../views/dashboard.php");
    }
  else {
    echo "ERROR: Please try again! Sorry $s. " 
                . mysqli_error($con);
    header("refresh:5;url=../views/editCCard.php?id=$ccnum");
  }

?>