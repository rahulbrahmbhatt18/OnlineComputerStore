<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];

$id = $_GET['id'];

// SQL query to select data from database
$sql = "SELECT * FROM credit_card WHERE StoredCardCID = '$cid' AND CCNumber = '$id' ";
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
          <h1>Edit Credit Card Info</h1>
          
          <form action="../db/editCard_db.php" method="get">
          
          <div class="top-row">

          	<?php   // LOOP TILL END OF DATA 
                while(($rows = mysqli_fetch_assoc($result)))
                {
             ?>


            <label style="margin-left: 180px;">Card Number</label>
            <div class="field-wrap">
            <input type="text" name="ccnum" id="ccnum" placeholder="Card Number" readonly required value=<?php echo $rows['CCNumber'];?>>
          	</div>

            <label style="margin-left: 180px;">Security Number</label>
            <div class="field-wrap">
            <input type="text" name="secnum" id="secnum" placeholder="Security Number" required value=<?php echo $rows['SecNumber'];?>>
            </div>

             <label style="margin-left: 180px;">Owner Name</label>
            <div class="field-wrap">
            <input type="text" name="owner" id="owner" placeholder="Owner Name" required value="<?php echo $rows['OwnerName'];?>">
            </div>

            <label style="margin-left: 180px;">Card Type</label>
            <div class="field-wrap">
            <input type="text" name="cctype" id="cctype" placeholder="Card Type" required value="<?php echo $rows['CCType'];?>">
            </div>

            <label style="margin-left: 180px;">Billing Address</label>
            <div class="field-wrap">
            <input type="text" name="billaddr" id="billaddr" placeholder="Billing Address" required value="<?php echo $rows['BillAddress'];?>">
            </div>

            <label style="margin-left: 180px;">Expiration Date</label>
            <div class="field-wrap">
            <input type="text" name="expdate" id="expdate" placeholder="Expiration Date" required value="<?php echo $rows['ExpDate'];?>">
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