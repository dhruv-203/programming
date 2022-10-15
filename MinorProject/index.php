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
        <form name="Register" method="post" id="createNewAcc">
            <span id="status"></span>
            <input type="text" name="NAME" id="NAME" required placeholder="Name">
            <input type="tel" name="Number" required id="Number" placeholder="Mobile Number">
            <input type="email" required name="Email" id="Email" placeholder="Email Address">
            <input type="password" required name="Pass" id="Pass" placeholder="Password">
            <input type="date" required name="dob" id="dob">
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

            <button class="register" onclick="validate(); return false;" id="signUp">Sign Up</button>
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
<script src="validation.js"></script>
<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("dob").setAttribute("max", today);

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