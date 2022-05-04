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
          <h1>Add Shipping Address</h1>
          
          <form action="../db/addSAddr_db.php" method="get">

            <div class="top-row">

              <div class="field-wrap">
            <input type="text" name="satype" id="satype" placeholder="Work/Home/Office/Other" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="recepient" id="recepient" placeholder="Recepient Name" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="street" id="street" placeholder="Street" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="snum" id="snum" placeholder="Street Number" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="city" id="city" placeholder="City" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="zip" id="zip" placeholder="ZIP" required>
          </div>
          
          <div class="field-wrap">
            <input type="text" name="state" id="state" placeholder="State" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="country" id="country" placeholder="Country" required>
          </div>

          <button type="submit" class="button button-block" id="save" name="save">Save</button>
          
          </div>
          </form>

        </div>
        
        <div>

      </div>
    </div>
  </body>
  </html>