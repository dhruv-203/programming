<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="register.php" method="post">
    First Name: <input type="text" name="fname" id="fname"><br>
    Last  Name: <input type="text" name="lname" id="lname"><br>
    Phone No. : <input type="tel" name="phone" id="phone"><br>
    Email Address: <input type="email" name="mail" id="mail"><br>
    Address: <textarea name="address" id="address" cols="30" rows="10"></textarea><br>
    Gender: Male<input type="radio" name="gender" id="Male" value="Male"> Female<input type="radio" name="gender" id="Female" value="Female"><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>