<?php
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
  $saname = $_GET["saname"];
  $recepient = $_GET["recepient"];
  $street = $_GET["street"];
  $snum = $_GET["snum"];
  $city = $_GET["city"];
  $zip = $_GET["zip"];
  $state = $_GET["state"];
  $country = $_GET["country"];
  
  $s = mysqli_multi_query($con, "UPDATE shipping_address SET RecepientName = '$recepient', Street = '$street', SNumber = '$snum', City = '$city', Zip = '$zip', State = '$state', Country = '$country' WHERE CID = '$cid' AND SAName = '$saname';");
  
  
  
  if($s) { 
    echo "Changes saved successfully!!!";
    header("refresh:3;url=../views/dashboard.php");
    }
  else {
    echo "ERROR: Please try again! Sorry $s. " 
                . mysqli_error($con);
    header("refresh:5;url=../views/editSAddr.php?id=$saname");
  }

?>