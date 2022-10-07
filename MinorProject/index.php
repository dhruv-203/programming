<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Facebook – log in or sign up</title>
</head>
<body>
    <div class="main">
    <div class="globalContainer">
        <div class="Information">
            <div class="brandLogo">
                <img src="logo.svg" id="logo" alt="Facebook">
            </div>
            <div class="brandTagLine">
                <p>Facebook helps you connect and share with the people in your life.</p>
            </div>
        </div>
        <div class="loginRegister">
            <form action="login.php" method="post">
                <input type="text" placeholder="Email or Password" name="usname" id="name">
                <input type="password" placeholder="Password" name="pass" id="pass">
                <input type="submit" value="Log in" id="submit">
                <a href="#">Forgotten password?</a>

                <hr>

                <button class="register">Create New Account</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>