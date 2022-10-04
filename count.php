<?php 
session_start();
if(isset($_SESSION['username'])){
    $connect=mysqli_connect("localhost","root","","UserDetails");
 setcookie("$_SESSION[username]","1",time()+(24*60*60)*30,"/");
 $prep=mysqli_query($connect,"SELECT USERNAME FROM USERS");
 $res=mysqli_fetch_all($prep);
 // print_r($res);
 $count=0;
 $arr = array();
 for($i=0;$i < count($res);$i++){
     array_push($arr,$res[$i][0]);
 }
 for($i=0;$i<count($arr);$i++){
     if(key_exists($arr[$i],$_COOKIE)){
         $count++;
     }
 }
 echo $count;
session_unset();
session_destroy();
}
?>