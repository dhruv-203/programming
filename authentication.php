<?php
//connecting to database

//first step 
$servername="localhost";  // this is a inbuilt xampp servername as it is available locally
$username="root" ;   // this is also the in-built
$password = ""; // this is also inbuilt password
$database="users";


// second step 
$res = mysqli_connect($servername,$username,$password,$database);  // connection is successful 

// verifying Details
$bol=true;
foreach ($_REQUEST as $name => $value) {
    if(empty($value)){
        $bol=false;
    }
    if($name=='dob'){
        $_REQUEST['dob']=date("Y-m-d",strtotime($value));
    }
}

//registering values into database
if($bol){
    $query = "INSERT INTO `userDetails`(`username`, `password`, `gender`, `email`, `birthdate`, `address`) VALUES('$_REQUEST[usname]',  '$_REQUEST[pass]',    '$_REQUEST[Gender]',    '$_REQUEST[email]',   '$_REQUEST[dob]',   '$_REQUEST[address]');";
    $ress=mysqli_query($res,$query);
    if(!$ress){
        echo mysqli_error($res);
    }
}

?>