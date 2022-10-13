<?php
require "connection.php";
if(!$conn){
    echo "connection failed";
}
$sql = "SELECT PASS FROM USERS WHERE USERNAME=$_REQUEST[usname]";
$result=$conn->query($sql);
$og_pass = $result->fetch_array();
?>