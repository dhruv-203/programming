<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo $_SESSION['otp'];
        if($_SESSION['otp']==$_REQUEST['otp']){
            header('Location: reset.php');
        }
        else{
            $err='Otp incorrect';
        }
    }
    ?>
    <form action="" method="POST">
        <p>Enter Otp: </p> <input type="text" name="otp" ><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>