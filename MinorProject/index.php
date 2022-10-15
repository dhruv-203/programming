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
    <div class="RegisterDialog" id="NewAcc">
        <button class="close" id="end" onclick="closediag();"></button>
        <div class="registerHeader">
            <h1>Sign Up</h1>
            <span class="SignUpTagline">
                <p>it's quick and easy</p>
            </span>
        </div>
        <hr>
        <form action="register.php" method="post" id="createNewAcc">
            <input type="text" name="NAME" id="NAME" placeholder="Name"><br><span id="name_err" class='error'></span>
            <input type="tel" name="Number" id="Number" placeholder="Mobile Number"><br><span id="num_err" class='error'></span>
            <input type="email" name="Email" id="Email" placeholder="Email Address"><br><span id="email_err" class='error'></span>
            <input type="password" name="Pass" id="Pass" placeholder="Password"><br><span id="pass_err" class='error'></span>
            <input type="date" name="dob" id="dob"><br><span id="dob_err" class="error"></span>
            <label for="Gender" id="tagGender">Select Your Gender: </label>
            <div class="genderCont">
                <div class="male">
                    <label for="Male">Male</label>
                    <input type="radio" name="Gender" id="Male" value="Male">
                </div>
                <div class="female">
                    <label for="Female">Female</label>
                    <input type="radio" name="Gender" id="Female" value="Female">
                </div>
            </div>

            <button class="register" id="signUp">Sign Up</button>
        </form>
    </div>
    
    <div class="main" id="bg">

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
                    <?php if(isset($_REQUEST['error'])){
                        echo "<span class=error >*Invalid Credentials</span>";
                    } ?>
                    <input type="text" placeholder="Email or Password" name="usname" id="name">
                    <input type="password" placeholder="Password" name="pass" id="pass">
                    <input type="submit" value="Log in" id="submit">
                    <a href="forget.php">Forgotten password?</a>

                    <hr>

                    <button class="register" onclick="showdiag(); return false;">Create New Account</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>

    var dialog = document.getElementById('NewAcc');
    var bg = document.getElementById('bg');
    function showdiag() {
        dialog.style.display = 'flex';
        bg.style.filter='blur(4px)';
    }
    function closediag() {
        dialog.style.display = 'none';
        bg.style.filter='none';
    }


</script>

</html>