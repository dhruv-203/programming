<?php
require "connection.php";
session_start();
if(!$conn){
    echo "connection failed";
}
$sql = "SELECT Password FROM USERS WHERE Email=?";
$prep = mysqli_prepare($conn, $sql);
if (!mysqli_stmt_bind_param($prep, 's', $_REQUEST['usname'])) {
    echo "Failed: " + mysqli_stmt_error($prep);
}
if (!mysqli_stmt_execute($prep)) {
    echo "Failed: " + mysqli_stmt_error($prep);
} else {
    $res = mysqli_stmt_get_result($prep);
    $value = mysqli_fetch_assoc($res);
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_REQUEST['usname']) && !empty($_REQUEST['pass']) && $_REQUEST['pass']==$value['Password']) {
        $_SESSION['NAME'] = $_REQUEST['usname'];
        $_SESSION['LOGIN']=1;
        header("Location: http://localhost/programming/MinorProject/home.php");
    }
    else{
        header('Location:http://localhost/programming/MinorProject/?error=1');
    }
}
?>