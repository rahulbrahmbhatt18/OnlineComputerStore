<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");
session_start();
$cid = $_SESSION['CID'];
  
// SQL query to select data from database
$sql = "SELECT * FROM login WHERE UID = '$cid' ORDER BY lname ASC ";
$sql1 = "SELECT * FROM customer WHERE CID = '$cid' ORDER BY lname ASC";
$sql2 = "SELECT * FROM credit_card WHERE StoredCardCID = '$cid'";
$sql3 = "SELECT * FROM shipping_address WHERE CID = '$cid' ORDER BY RecepientName ASC";
$result = mysqli_query($con,$sql); 
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Newark Online Computer Store</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }

        /* Add a black background color to the top navigation */
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
</head>
  
<body>
    
        <div class="topnav">
        <b><a href="logout.php">Logout</a>
        <a href="statistics.php">Statistics</a>
        <a href="transaction.php">Transactions</a>
        <a href="basket.php">Basket</a>
        <a href="products.php">Products</a></b>
        </div>

        <section>
        <h1>Newark Online Computer Store</h1>
        <!-- TABLE CONSTRUCTION-->
        <table border="1" width="35%" cellspacing="5" cellpadding="5" style="margin-bottom: 20px">
            <tr>
                <th>CID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Edit Info</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while(($rows = mysqli_fetch_assoc($result)) && ($rows1 = mysqli_fetch_assoc($result1)))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['UID'];?></td>
                <td><?php echo $rows['FName'];?></td>
                <td><?php echo $rows['LName'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Password'];?></td>
                <td><?php echo $rows1['Address'];?></td>
                <td><?php echo $rows1['Phone'];?></td>
                <td><?php echo $rows1['Status'];?></td>
                <td><a href="editCustInfo.php">&#9998</a></td>
            </tr>
        </table>
            <?php
                }
             ?>

            <table border="1" width="35%" cellspacing="5" cellpadding="5" style="margin-bottom: 20px">
            <tr>
                <th>Credit Card Number</th>
                <th>Security Number</th>
                <th>Owner Name</th>
                <th>Credit Card Type</th>
                <th>Billing Address</th>
                <th>Expiration Date</th>
                <th>Edit Info</th>
                <th>Add Card</th>
            </tr>

            <?php   // LOOP TILL END OF DATA 
                while($rows2 = mysqli_fetch_assoc($result2))
                {
             ?>

             <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows2['CCNumber'];?></td>
                <td><?php echo $rows2['SecNumber'];?></td>
                <td><?php echo $rows2['OwnerName'];?></td>
                <td><?php echo $rows2['CCType'];?></td>
                <td><?php echo $rows2['BillAddress'];?></td>
                <td><?php echo $rows2['ExpDate'];?></td>
                <td><a href="editCCard.php?id=<?php echo $rows2['CCNumber'];?>">&#9998</a></td>
                <td><a href="addCCard.php">&#8853</a></td>
            </tr>
        

        <?php
                }
             ?>
        </table>

        <table border="1" width="35%" cellspacing="5" cellpadding="5">
            <tr>
                <th>Shipping Address Name</th>
                <th>Recepient Name</th>
                <th>Street</th>
                <th>Street Number</th>
                <th>City</th>
                <th>Zip</th>
                <th>State</th>
                <th>Country</th>
                <th>Edit Info</th>
                <th>Add Address</th>
            </tr>

             <?php   // LOOP TILL END OF DATA 
                while($rows3 = mysqli_fetch_assoc($result3))
                {
             ?>


             <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows3['SAName'];?></td>
                <td><?php echo $rows3['RecepientName'];?></td>
                <td><?php echo $rows3['Street'];?></td>
                <td><?php echo $rows3['SNumber'];?></td>
                <td><?php echo $rows3['City'];?></td>
                <td><?php echo $rows3['Zip'];?></td>
                <td><?php echo $rows3['State'];?></td>
                <td><?php echo $rows3['Country'];?></td>
                <td><a href="editSAddr.php?id=<?php echo $rows3['SAName'];?>"">&#9998</a></td>
                <td><a href="addSAddr.php">&#8853</a></td>
            </tr>

            <?php
                }
             ?>

        </table>
        
        

    </section>
</body>
  
</html>