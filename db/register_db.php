<?php
$con = mysqli_connect("localhost","root","","onlinestore","3307");

  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $phone = $_GET["phone"];
  $email = $_GET["email"];
  $password = $_GET['password'];
  $satype = $_GET["satype"];
  $street = $_GET["street"];
  $snum = $_GET["snum"];
  $city = $_GET["city"];
  $zip = $_GET["zip"];
  $state = $_GET["state"];
  $country = $_GET["country"];
  $ccnum = $_GET["ccnum"];
  $secnum = $_GET["secnum"];
  $owner = $_GET["owner"];
  $cctype = $_GET["cctype"];
  $billaddr = $_GET["billaddr"];
  $expdate = $_GET["expdate"];
  $status = "Regular";
  $cid = rand(0,10000000);
  $bid = rand(0,10000000);
  while (1) {
    $result = mysqli_query($con, "SELECT UID FROM login WHERE UID='$cid'");
    $count = mysqli_num_rows($result);
    if($count==0)
    {
      break;
    }
    $cid = rand(0,10000000);
  }
  while (1) {
    $results = mysqli_query($con, "SELECT BID FROM basket WHERE CID='$cid'");
    $counts = mysqli_num_rows($results);
    if($counts==0)
    {
      break;
    }
    $bid = rand(0,10000000);
  }
  
  $s = mysqli_multi_query($con, "INSERT INTO login (UID, FName, LName, Email, Password) VALUES ('$cid',  '$fname', '$lname', '$email', '$password'); INSERT INTO customer (CID, FName, LName, Email, Address, Phone, Status) VALUES ('$cid', '$fname',  '$lname',  '$email', '$street', '$phone', '$status'); INSERT INTO shipping_address (CID, SAname, RecepientName, Street, SNumber, City, Zip, State, Country) VALUES ('$cid', '$satype', '$fname', '$street', '$snum', '$city', '$zip', '$state', '$country'); INSERT INTO credit_card(CCNumber, SecNumber, OwnerName, CCType, BillAddress, ExpDate, StoredCardCID) VALUES ('$ccnum', '$secnum', '$owner', '$cctype', '$billaddr', '$expdate', '$cid'); INSERT INTO basket (CID, BID) VALUES ('$cid', '$bid');");
  
  
  
  if($s) { 
    echo "Registration successful! Please log in to continue.";
    header("refresh:5;url=../views/login.php");
    }
  else {
    echo "ERROR: Please try again! Sorry $s. " 
                . mysqli_error($con);
     header("refresh:5;url=../views/signup.php");
  }

?>