<?php
$connect = mysqli_connect("localhost","root","","UserDetails");
// mysqli_query($connect,"CREATE DATABASE UserDetails");
// mysqli_select_db($connect,"UserDetails");
// $query="CREATE TABLE USERS(`USERNAME` VARCHAR(30) PRIMARY KEY, `PASS` VARCHAR(31), `PHONENO` NUMERIC(11),`EMAIL_ID` VARCHAR(80))";
if(!mysqli_connect_error()){
    echo "Failed";
}
// if(!mysqli_query($connect,$query)){
//     echo mysqli_error($connect);
// }
static $myvar=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.output{
            position: absolute;
            top:30%;
            left:50%;
        }
        html,body{
            width: 100%;height: 100%;
            
        }
        *{
            margin: 0;padding: 0;
        }
        </style>
</head>
<body>

    <!-- <div class='output'>
    <h2>OUTPUT: </h2><br>
    <span><h4> Username: </h4><p><?php echo $_REQUEST['Username']; ?></p></span><br>
    <span><h4> Phone Number: </h4><p><?php echo $_REQUEST['number']; ?></p></span> <br>
    <span><h4> Email: </h4><p><?php echo $_REQUEST['email']; ?></p></span> <br>
    </div> -->
        <?php
        $name=$_REQUEST['Username'];
        $pass=$_REQUEST['Password'];
        $phone=$_REQUEST['number'];
        $email=$_REQUEST['email'];
            $sql="INSERT INTO USERS VALUES(?,?,?,?)";
            $prep=mysqli_prepare($connect,$sql);
            if(!mysqli_stmt_bind_param($prep,"ssis",$name,$pass,$phone,$email)){
                echo mysqli_error($connect);
            }
            if(!mysqli_stmt_execute($prep)){
                echo mysqli_stmt_error($prep);
            }
        ?>
</body>
</html>