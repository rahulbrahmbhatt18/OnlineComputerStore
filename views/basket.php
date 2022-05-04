<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
$sql = "SELECT * FROM basket WHERE CID = '$cid'";
$result = mysqli_query($con,$sql);
$rows = mysqli_fetch_assoc($result);
$bid = $rows['BID'];
$sqlAll = "SELECT * FROM product, appears_in, basket 
		WHERE basket.BID = appears_in.BID AND appears_in.PID = product.PID 
		AND basket.CID = '$cid' AND appears_in.BID = '$bid'";
$resultAll = mysqli_query($con,$sqlAll);
?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
    background: #ffff80
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
        <a href="transaction.php">Transactions</a>
        <a href="products.php">Products</a>
        <a href="dashboard.php">Home</a></b>
        </div>

<center>   
          <h1>Basket</h1>


         <form action="../db/transaction_db.php" method="get">

           <div><b>Date: <input type="text" name="tdate" value="<?php
        date_default_timezone_set("America/New_York");
		echo date("m/d/Y"); ?>" readonly style="width: 5%"></b></div>

          <b><p>Basket ID: <input type="text" style="width: 5%"; name="bsktid" readonly value="<?php echo $bid;?>"></p></b>
          
         

          <table style="border:1px solid black; border-collapse: collapse;">
	
		<tr>
			<th scope="col"><i>Product ID</i></th>
			<th scope="col"><i>Name</i></th>
			<th scope="col"><i>Price ($)</i></th>
			<th scope="col"><i>Quantity</i></th>
			<th scope="col"><i>Total Price ($)</i></th>
		</tr>

			<?php   // LOOP TILL END OF DATA 
                while(($row = mysqli_fetch_assoc($resultAll)))
                {
             ?>

             <tr>
			<td><center><b><?php echo $row['PID'];?></b></center></td>
			<td><center><b><?php echo $row['PName'];?></b></center></td>
			<td><center><b><?php echo $row['PPrice'];?></b></center></td>
			<td><center><b><?php echo $row['Quantity'];?></b></center></td>
			<td><center><b><?php echo $row['PriceSold'];?></b></center></td>
		</tr>

		<?php
                }
             ?>
        </table>
          	
          <br><input style="color: red; font-weight: bold;" type="submit" name="purchase" value="Purchase">

         </form>
     </center>
</body>
</html>