<?php
  session_start();
  unset($_SESSION['CID']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Newark Online Computer Store</title>
   <style>
    h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
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
    </style>
</head>

<body>
    
        <div class="topnav">
        <b><a href="login.php">Login</a></b>
        </div>

         <section>
        <h1>Newark Online Computer Store</h1>
        <center>
    <h1>Thank you for visiting Newark Online Computer Store!</h1>
    <hr>
    <p style="font-size: 30px; color: green;">You have been successfully logged out.</p>
  </center>
</section>
</body>
</html>