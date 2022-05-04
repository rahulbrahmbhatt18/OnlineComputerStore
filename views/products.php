<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
// SQL query to select data from database
$sql = "SELECT * FROM product";
//$sql1 = "SELECT * FROM product, appears_in, basket WHERE basket.BID = appears_in.BID AND appears_in.PID = product.PID AND CID = '$cid'";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
    background: #eee
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
        <a href="basket.php">Basket</a>
        <a href="dashboard.php">Home</a></b>
        </div>
<div class="form">
<center>         
          <h1>Products</h1>
          
        
<!--table style="border:1px solid black; border-collapse: collapse;">
	
	<thead>
		<tr>
			<th scope="col">Product ID</th>
			<th scope="col">Product Type</th>
			<th scope="col">Product Name</th>
			<th scope="col">Product Price ($)</th>
			<th scope="col">Description</th>
			<th scope="col">Quantity Left</th>
			<th scope="col">Select Quantity</th>
			<th scope="col">Add to Basket</th>
		</tr>
	</thead>
	<tbody-->
		<?php   // LOOP TILL END OF DATA 
                while(($rows = mysqli_fetch_assoc($result)))
                {
             ?>

         <div>
		<form method="get" action="../db/basket_db.php" style="border:1px solid black;">
		<div><br>
		<div><b>Product ID: </b><i><input style="width: 10%" type="text" name="prid" readonly value="<?php echo $rows["PID"]; ?>"></i></div><br>
		<div><b>Product Type: </b><i><?php echo $rows["PType"]; ?></i></div><br>
		<div><b>Name: </b><i><?php echo $rows["PName"]; ?></i></div><br>
		<div><b>Price: $</b><i><input style="width: 5%" type="text" name="prprice" readonly value="<?php echo $rows["PPrice"]; ?>"></i></div><br>
		<div><b>Description: </b><i><?php echo $rows["Description"]; ?></i></div><br>
		<div><b>Available Quantity: </b><i><?php echo $rows["PQuantity"]; ?></i></div><br>
		<div><center><b>Select Quantity: </b><i><select name="prqt" style="width: 5%;">
                <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                  </select></i></center><br></div>

                  <div><input type="submit" style="color: blue; font-weight: bold;" value="Add to Basket"></div><br><br>
		</div>
		</form>
	</div>

		<!--tr>
			<td><center><input type="text" name="prid" readonly style="text-align: center;" value="<?php //echo $rows['PID'];?>"></center></td>
			<td><center><?php //echo $rows['PType'];?></center></td>
			<td><center><?php //echo $rows['PName'];?></center></td>
			<td><center><?php //echo $rows['PPrice'];?></center></td>
			<td><center><?php //echo $rows['Description'];?></center></td>
			<td><center><?php //echo $rows['PQuantity'];?></center></td>
			<td><select name="prqt" style="width: 100%;">
                <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                  </select></td>
			<td><center><a href="../db/basket_db.php">&#x1F6D2</a></center></td>
		</tr>

	</tbody-->
	<?php
                }
             ?>
</center>
</div>
</body>
</html>