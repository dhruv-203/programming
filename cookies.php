<?php
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie("oreo","strawberry",time()+(24*60*60)*30,"/"); //cookie will expire after a month
?>
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
    if(count($_COOKIE)>0){
        echo "COOKIE are enadkjasbhkjidas<br>";
    }
    else{
        echo "Cookie are disable";
    }
    ?>
    <?php 
    if(!isset($_COOKIE['oreo'])) {
        echo "Cookie named 'oreo' is not set!";
      } else {
        echo "Cookie 'oreo' is set!<br>";
        echo "Value is: " . $_COOKIE['oreo'];
      }
    // to update the existing query 
    // run the setcookie again 
    setcookie("oreo","hui",time()+24*60*60*60*30,"/");
    echo "Cookie 'oreo' is set!<br>";
    echo "Value is: " . $_COOKIE['oreo'];
    ?>
    
</body>
</html>