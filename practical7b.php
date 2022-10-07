<!DOCTYPE html>
<html lang="en">
<?php $connect=mysqli_connect("localhost","root","","UserDetails");
      session_start();?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html,body{
            width: 100%;
            height: 100%;
            background-color: wheat;
        }
        .container{
            position: relative;
            left:30%;
            top:20%;
            width: 40%;
            height: 60%;
            background-color: white;
            font-size: 3rem;
            font-weight: 500;
            text-align: center;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;

            letter-spacing: 1.5px;
            }
            .visitorCount{
                height: auto;
                width: auto;
            }
    </style>
</head>

<body>
    <div class="container">
        <div class="visitorCount">
            <?php
            setcookie("$_SESSION[username]", "1", time() + (24 * 60 * 60) * 30, "/");
            $prep = mysqli_query($connect, "SELECT USERNAME FROM USERS");
            $res = mysqli_fetch_all($prep);
            // print_r($res);
            $count = 0;
            $arr = array();
            for ($i = 0; $i < count($res); $i++) {
                array_push($arr, $res[$i][0]);
            }
            for ($i = 0; $i < count($arr); $i++) {
                if (key_exists($arr[$i], $_COOKIE)) {
                    $count++;
                }
            }
            echo "User-Count: ".$count;

            ?>
        </div>
    </div>
</body>

</html>