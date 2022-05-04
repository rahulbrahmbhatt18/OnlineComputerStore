<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
$sql = "SELECT * FROM transaction WHERE CID = '$cid' ORDER BY TDate DESC";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
    background: lightgreen;
}
.ratings i {
    font-size: 16px;
    color: red
}

.strike-text {
    color: red;
    text-decoration: line-through
}

.product-image {
    width: 100%
}

.dot {
    height: 7px;
    width: 7px;
    margin-left: 6px;
    margin-right: 6px;
    margin-top: 3px;
    background-color: blue;
    border-radius: 50%;
    display: inline-block
}

.spec-1 {
    color: #938787;
    font-size: 15px
}

h5 {
    font-weight: 400
}

.para {
    font-size: 16px
}
  .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

th, td{
	border:1px solid black; 
	border-collapse: collapse;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newark Online Computer Store</title>
</head>
<body>

<div class="topnav">
        <b><a href="logout.php">Logout</a>
        <a href="statistics.php">Statistics</a>
        <a href="basket.php">Basket</a>
        <a href="products.php">Products</a>
        <a href="dashboard.php">Home</a></b>
        </div>

<center>   
          <h1>Transactions</h1>


         <form action="#" method="get">

        <table style="border:1px solid black; border-collapse: collapse;">

          <tr>
              <th scope="col"><i>Basket ID</i></th>
              <th scope="col"><i>Credit Card Number</i></th>
              <th scope="col"><i>Ship. Address Name</i></th>
              <th scope="col"><i>Transaction Date</i></th>
              <th scope="col"><i>Transaction Status</i></th>
          </tr>

          <?php   // LOOP TILL END OF DATA 
                while(($row = mysqli_fetch_assoc($result)))
                {
             ?>

             <tr>
      <td><center><b><?php echo $row['BID'];?></b></center></td>
      <td><center><b><?php echo $row['CCNumber'];?></b></center></td>
      <td><center><b><?php echo $row['SAName'];?></b></center></td>
      <td><center><b><?php echo $row['TDate'];?></b></center></td>
      <td><center><b><?php echo $row['TTag'];?></b></center></td>
    </tr>

    <?php
                }
             ?>
        </table>
    </form>
     </center>
</body>
</html>
  
    