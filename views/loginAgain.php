<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newark Online Computer Store</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <main>
        <center><p style="color:red; font-size:25px; margin-top:30px;">Incorrect Email/Password! Please try again.</p></center>
        <div class="row">
            <div class="colm-logo">
                <img src="../img/njit_logo.png" alt="Logo">
                <h2 style="color:red; font-size:25px;">Newark Online Computer Store</h2>
            </div>
            <form action="../db/login_db.php" method="get">
            <div class="colm-form">
                <div class="form-container">
                    <input type="text" name="email" id="email" placeholder="Email address">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <a href="../db/login_db.php"><input type="submit" name="login" id="login" value="Login" class="btn-login"></a>
                    <!--a href="#">Forgotten password?</a-->
                    <!--a href="signup.php"><input type="submit" name="signup" id="signup" value="Sign Up" class="btn-new"></a-->
                </div>
            </div>
        </form>
        </div>
    </main>
</body>
</html>