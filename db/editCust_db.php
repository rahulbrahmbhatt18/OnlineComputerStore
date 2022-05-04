<?php
$con = mysqli_connect("localhost","root","","onlinestore","3307");
  
  $cid = $_GET["cid"];
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $phone = $_GET["phone"];
  $addr = $_GET["addr"];
  $email = $_GET["email"];
  $password = $_GET["password"];
  $status = $_GET["status"];
  
  $s = mysqli_multi_query($con, "UPDATE login SET UID = '$cid', FName = '$fname', LName = '$lname', Email = '$email', Password = '$password' WHERE UID = '$cid'; UPDATE customer SET CID = '$cid', FName = '$fname', LName = '$lname', Email = '$email', Address = '$addr', Phone = '$phone', Status = '$status' WHERE CID = '$cid';");
  
  
  
  if($s) { 
    echo "Changes saved successfully!!!";
    header("refresh:5;url=../views/dashboard.php");
    }
  else {
    echo "ERROR: Please try again! Sorry $s. " 
                . mysqli_error($con);
    header("refresh:5;url=../views/editCustInfo.php");
  }

?>