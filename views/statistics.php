<?php
  
$con = mysqli_connect("localhost","root","","onlinestore","3307");

$sql1 = "SELECT PID, COUNT(*) AS COUNT FROM statlog
WHERE TDate between '01/01/2012' and '05/03/2022' GROUP BY PID ORDER BY PID ASC";

$sql2 = "SELECT temp.PID, count(*) as cnt from (
SELECT A.CID, PID FROM statlog AS S, basket AS A
WHERE A.BID=S.BID AND S.TDate BETWEEN '01/01/2012' and '05/03/2022'
GROUP BY CID , PID) as temp
group by temp.PID
order by cnt desc";

$sql3 = "SELECT temp.CID, SUM(TransPrice) AS TotalPriceSpent from (SELECT A.CID, PID,SUM(PriceSold) AS TransPrice FROM statlog AS S, basket AS A WHERE A.BID=S.BID and S.TDate BETWEEN '01/01/2012' and '05/03/2022' GROUP BY CID , PID) AS temp GROUP by temp.CID ORDER BY TotalPriceSpent DESC";

$sql4 = "SELECT c.CCNumber, MAX(tl.TotalTransactionPrice) AS total
FROM transactionlogs AS tl, credit_card AS c, transaction AS t, basket AS b
WHERE b.BID = t.BID AND t.CCNumber = c.CCNumber and tl.BID=t.BID AND tl.TDate BETWEEN '01/01/2012' and '05/03/2022' 
GROUP BY c.CCNumber";

$sql5 = "SELECT PType, ROUND(AVG(PPrice), 2)  AS AVRG FROM `product`, statlog WHERE product.PID = statlog.PID AND PType = PType AND PType != 'Accessories' AND statlog.TDate between '01/01/2012' and '05/03/2022' GROUP BY PType";

$res1 = mysqli_query($con,$sql1);

$res2 = mysqli_query($con,$sql2);

$res3 = mysqli_query($con,$sql3);

$res4 = mysqli_query($con,$sql4);

$res5 = mysqli_query($con,$sql5);

?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
    background: lightpink;
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
        <a href="transaction.php">Transactions</a>
        <a href="basket.php">Basket</a>
        <a href="products.php">Products</a>
        <a href="dashboard.php">Home</a></b>
        </div>


        <center>   
          <h1>Statistics</h1>


         <form action="#" method="get">

        <b><h2>The following data is for the dates between 01/01/2012 to 05/03/2022</h2></b>
        <b><h2>Most Frequently Sold Products</h2></b>
        <table style="border:1px solid black; border-collapse: collapse;">

          <tr>
              <th scope="col"><i>Product ID</i></th>
              <th scope="col"><i>Product Count</i></th>
          </tr>

          <?php   // LOOP TILL END OF DATA 
                while(($row = mysqli_fetch_assoc($res1)))
                {
             ?>

             <tr>
      <td><center><b><?php echo $row['PID'];?></b></center></td>
      <td><center><b><?php echo $row['COUNT'];?></b></center></td>
    </tr>

    <?php
                }
             ?>
        </table><br><br>

        <b><h2>Products which are sold to the highest num. of dist. customers</h2></b>
        <table style="border:1px solid black; border-collapse: collapse;">

          <tr>
              <th scope="col"><i>Product ID</i></th>
              <th scope="col"><i>No. of Customers</i></th>
          </tr>

          <?php   // LOOP TILL END OF DATA 
                while(($row1 = mysqli_fetch_assoc($res2)))
                {
             ?>

             <tr>
      <td><center><b><?php echo $row1['PID'];?></b></center></td>
      <td><center><b><?php echo $row1['cnt'];?></b></center></td>
    </tr>

    <?php
                }
             ?>
        </table><br><br>

        <b><h2>10 best customers in terms of money spent</h2></b>
        <table style="border:1px solid black; border-collapse: collapse;">

          <tr>
              <th scope="col"><i>Customer ID</i></th>
              <th scope="col"><i>Total Price Spent</i></th>
          </tr>

          <?php   // LOOP TILL END OF DATA 
                while(($row2 = mysqli_fetch_assoc($res3)))
                {
             ?>

             <tr>
      <td><center><b><?php echo $row2['CID'];?></b></center></td>
      <td><center><b>$<?php echo $row2['TotalPriceSpent'];?></b></center></td>
    </tr>

    <?php
                }
             ?>
        </table><br><br>

        <b><h2>Maximum basket total amount per credit card</h2></b>
        <table style="border:1px solid black; border-collapse: collapse;">

          <tr>
              <th scope="col"><i>Credit Card Number</i></th>
              <th scope="col"><i>Maximum Transaction Price (Total)</i></th>
          </tr>

          <?php   // LOOP TILL END OF DATA 
                while(($row3 = mysqli_fetch_assoc($res4)))
                {
             ?>

             <tr>
      <td><center><b><?php echo $row3['CCNumber'];?></b></center></td>
      <td><center><b>$<?php echo $row3['total'];?></b></center></td>
    </tr>

    <?php
                }
             ?>
        </table><br><br>

        <b><h2>Average selling product price per product type</h2></b>
        <table style="border:1px solid black; border-collapse: collapse;">

          <tr>
              <th scope="col"><i>Product Type</i></th>
              <th scope="col"><i>Average Price</i></th>
          </tr>

          <?php   // LOOP TILL END OF DATA 
                while(($row4 = mysqli_fetch_assoc($res5)))
                {
             ?>

             <tr>
      <td><center><b><?php echo $row4['PType'];?></b></center></td>
      <td><center><b>$<?php echo $row4['AVRG'];?></b></center></td>
    </tr>

    <?php
                }
             ?>
        </table><br><br>

 </form>
     </center>

</body>
</html>