<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
  $id = $_GET['id'];

// SQL query to select data from database
$sql = "SELECT * FROM shipping_address WHERE CID = '$cid' AND SAName = '$id'";
$result = mysqli_query($con,$sql);
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
          <h1>Shipping Address Info</h1>
          
          <form action="../db/editSAddr_db.php" method="get">
          
          <div class="top-row">

          	<?php   // LOOP TILL END OF DATA 
                while(($rows = mysqli_fetch_assoc($result)))
                {
             ?>


            <label style="margin-left: 180px;">Ship Addr. Name</label>
            <div class="field-wrap">
            <input type="text" name="saname" readonly id="saname" placeholder="Ship Addr. Name" required value="<?php echo $rows['SAName'];?>">
          	</div>

            <label style="margin-left: 180px;">Recepient Name</label>
            <div class="field-wrap">
            <input type="text" name="recepient" id="recepient" placeholder="Recepient Name" required value="<?php echo $rows['RecepientName'];?>">
            </div>

            <label style="margin-left: 180px;">Street</label>
            <div class="field-wrap">
            <input type="text" name="street" id="street" placeholder="Street" required value="<?php echo $rows['Street'];?>">
            </div>

            <label style="margin-left: 180px;">Street Number</label>
            <div class="field-wrap">
            <input type="text" name="snum" id="snum" placeholder="Street Number" required value="<?php echo $rows['SNumber'];?>">
            </div>

            <label style="margin-left: 180px;">City</label>
            <div class="field-wrap">
            <input type="text" name="city" id="city" placeholder="City" required value="<?php echo $rows['City'];?>">
            </div> 

            <label style="margin-left: 180px;">Zip</label>
            <div class="field-wrap">
            <input type="text" name="zip" id="zip" placeholder="Zip" required value="<?php echo $rows['Zip'];?>">
            </div>

            <label style="margin-left: 180px;">State</label>
            <div class="field-wrap">
            <input type="text" name="state" id="state" placeholder="State" required value="<?php echo $rows['State'];?>">
            </div>

            <label style="margin-left: 180px;">Country</label>
            <div class="field-wrap">
            <input type="text" name="country" id="country" placeholder="Country" required value="<?php echo $rows['Country'];?>">
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