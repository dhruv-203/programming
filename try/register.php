<?php
if(!$connect=mysqli_connect("localhost","root","")){
    echo "error selecting database";
}
// if(!mysqli_select_db($connect,'USERS')){
//     echo "error selecting database";
// }
// else{
//     mysqli_query($connect,"CREATE DATABASE USERS;");
//     mysqli_select_db($connect,"USERS");
// }
try {
    mysqli_query($connect,"CREATE DATABASE USERS;");
    mysqli_select_db($connect,'USERS');
    echo "Hello";
} catch (Throwable $th) {
    mysqli_select_db($connect,"USERS");
}
try {
    
mysqli_query($connect,"CREATE TABLE UserDetails(`First Name` varchar(30), `Last Name` varchar(30), `Phone NO.` numeric(10),`Email Address` varchar(60), `Address` varchar(200),`Gender` varchar(10))");
} catch (\Throwable $th) {}
if(!mysqli_query($connect,'INSERT INTO UserDetails VALUES("'.$_REQUEST['fname'].'","'.$_REQUEST['lname'].'","'.$_REQUEST['phone'].'","'.$_REQUEST['mail'].'","'.$_REQUEST['address'].'","'.$_REQUEST['gender'].'")')){
    echo "Insertion failed";
}
else{
header("Location:Home.html");
}


?>