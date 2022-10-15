<?php
require "connection.php";
$name = $_REQUEST['NAME']; 
$pass = $_REQUEST['Pass'];
$tel = $_REQUEST['Number'];
$mail = $_REQUEST['Email'];
$date = $_REQUEST['dob'];
$gender = $_REQUEST['Gender'];

$sql = "INSERT INTO USERS VALUES(?,?,?,?,?,?)";
            $prep = mysqli_prepare($conn, $sql);
            if (!mysqli_stmt_bind_param($prep, "sissss", $name,$tel,$mail,$pass,$date,$gender)) {
                echo mysqli_error($conn);
            }
            if (!mysqli_stmt_execute($prep)) {
                echo mysqli_stmt_error($prep);
            } else {
                echo "Registered Successfully....";
                sleep(4);
                header("Location: http://localhost/programming/MinorProject/");
            }
?>