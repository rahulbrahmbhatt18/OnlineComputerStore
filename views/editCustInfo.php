<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
// SQL query to select data from database
$sql = "SELECT * FROM login WHERE UID = '$cid' ORDER BY lname ASC ";
$sql1 = "SELECT * FROM customer WHERE CID = '$cid' ORDER BY lname ASC";
$result = mysqli_query($con,$sql); 
$result1 = mysqli_query($con,$sql1);
?>

<!DOCTYPE html>
<html lang="en">
<style>
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
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newark Online Computer Store</title>
    <script src="../js/signup.js"></script>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>

	 <div class="topnav">
        <b><a href="logout.php">Logout</a>
        <a href="basket.php">Basket</a>
        <a href="products.php">Products</a>
        <a href="dashboard.php">Home</a></b>
        </div>

<div class="form">
      
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Edit Customer Info</h1>
          
          <form action="../db/editCust_db.php" method="get">
          
          <div class="top-row">

          	<?php   // LOOP TILL END OF DATA 
                while(($rows = mysqli_fetch_assoc($result)) && ($rows1 = mysqli_fetch_assoc($result1)))
                {
             ?>


            <label style="margin-left: 240px;">Cust. ID</label>
            <div class="field-wrap">
            <input type="text" name="cid" id="cid" placeholder="Customer ID" required readonly value=<?php echo $rows['UID'];?>>
          	</div>

            <label style="margin-left: 240px;">First Name</label>
            <div class="field-wrap">
              <input type="text" name="fname" id="fname" placeholder="First Name" required value=<?php echo $rows['FName'];?>>
            </div>
        
        	  <label style="margin-left: 240px;">Last Name</label>
            <div class="field-wrap">
              <input type="text" name="lname" id="lname" placeholder="Last Name" required value=<?php echo $rows['LName'];?>>
            </div>

            <label style="margin-left: 240px;">Phone</label>
          <div class="field-wrap">
              <input type="text" name="phone" id="phone" placeholder="Phone" required value=<?php echo $rows1['Phone'];?>>
            </div>

            <label style="margin-left: 240px;">Address</label>
          <div class="field-wrap">
              <input type="text" name="addr" id="addr" placeholder="Address" required value="<?php echo $rows1['Address'];?>">
            </div>

            <label style="margin-left: 240px;">Email</label>
          <div class="field-wrap">
            <input type="text" name="email" id="email" placeholder="Email" required value=<?php echo $rows['Email'];?>>
          </div>
          
          <label style="margin-left: 240px;">Password</label>
          <div class="field-wrap">
            <input type="text" name="password" id="password" placeholder="Password" required value=<?php echo $rows['Password'];?>>
          </div>

          <label style="margin-left: 240px;">Status</label>
          <div class="field-wrap">
            <input type="text" name="status" id="status" placeholder="Status" required readonly value=<?php echo $rows1['Status'];?>>
          </div>

          <button type="submit" class="button button-block" id="save" name="save">Save Changes</button>
          
          <?php
                }
             ?>

          </div>
          </form>

        </div>
        
        <div>   
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>
</html>