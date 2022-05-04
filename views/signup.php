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
        <b><a href="login.php">Login</a>
        </div>

<div class="form">
      
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up/Register</h1>
          
          <form action="../db/register_db.php" method="get">
          
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" name="fname" id="fname" placeholder="First Name" required>
            </div>
        
            <div class="field-wrap">
              <input type="text" name="lname" id="lname" placeholder="Last Name" required>
            </div>

          <div class="field-wrap">
              <input type="text" name="phone" id="phone" placeholder="Phone" required>
            </div>

          <div class="field-wrap">
            <input type="text" name="email" id="email" placeholder="Email" required>
          </div>
          
          <div class="field-wrap">
            <input type="password" name="password" id="password" placeholder="Password" required>
          </div>

          <div class="field-wrap">
            <input type="text" name="satype" id="satype" placeholder="Work/Home/Office/Other" required>
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

          <button type="submit" class="button button-block" id="signup" name="signup">Sign Up</button>
          
          </div>
          </form>

        </div>
        
        <div>   
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>
</html>