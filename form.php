<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .output{
            position:absolute;
            top:25%;
            left:35%;
        }
        p{
            font-style:bold;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="output">
        <p><?php
        if($_REQUEST["pass"]=="D H R U V"){
            echo "Username: $_REQUEST[usname] <br>";
            echo "Gender: $_REQUEST[Gender] <br>";
            echo "Email: $_REQUEST[email] <br>";
            echo "Date Of Birth: $_REQUEST[dob] <br>";
            echo "Address: $_REQUEST[address] <br>";
            echo "Your Prefrence: " ;
            foreach ($_REQUEST["types"] as $value) {
            echo $value."<br>";
            }

        }
        else{
            header("Location: http://localhost/Registration.php?error=1");
        }
        ?>
        </p>
    </div>
</body>
</html>