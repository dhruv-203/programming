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
<?php
    echo "<div class='output'>
    <h2>OUTPUT: </h2><br>
    <span><h4> Username: </h4><p>$_REQUEST[Username]</p></span><br>
    <span><h4> Phone Number: </h4><p>$_REQUEST[number]</p></span> <br>
    <span><h4> Email: </h4><p>$_REQUEST[email]</p></span> <br>
    </div>";
    ?>
</body>
</html>