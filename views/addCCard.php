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
          <h1>Add Credit Card</h1>
          
          <form action="../db/addCCard_db.php" method="get">

            <div class="top-row">

              <div class="field-wrap">
            <input type="text" name="ccnum" id="ccnum" placeholder="Credit Card Number" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="secnum" id="secnum" placeholder="Security Number" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="owner" id="owner" placeholder="Name on the card" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="cctype" id="cctype" placeholder="Credit Card Type" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="billaddr" id="billaddr" placeholder="Billing Address" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="expdate" id="expdate" required pattern="(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])-(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])" placeholder="Expiration Date (MM-YYYY)">
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