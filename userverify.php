<?php
$connect = mysqli_connect("localhost","root","","users");
if($connect){
    $username_query="SELECT `username`,`password` FROM `userDetails`;";
    $result= mysqli_query($connect,$username_query);
    $data=mysqli_fetch_all($result);
    print_r($data);
    $bol=false;
    $i=0;
    $usname=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    foreach ($data as $value) {   
    if($usname==$value[0]&&$pass==$value[1]){
        $bol=true;
    }
    }
    if($bol){
        print("Login Successful");
    }
    else{
        print("Failed");
    }
}
?>