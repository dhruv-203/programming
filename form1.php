<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-style:bold;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="output">
        <p><?php
        // $arr=array($_REQUEST["usname"],$_REQUEST["Gender"],$_REQUEST["email"], $_REQUEST["dob"],$_REQUEST["address"]);
        // foreach ($arr as $value) {
        //     echo $value."<br>";
        // }
        // foreach($_REQUEST["types"]as $value){
        //     echo $value."<br>";
        // }
       
        foreach ($_REQUEST as $key => $value) {
            if($key!="types" and $key!="pass"){
            echo "$key: $value <br>";
            }
            else if($key=="types"){
                foreach ($value as $valu) {
                    echo $valu."<br>";
                }
            }
        }
        ?>
        </p>
    </div>
</body>
</html>