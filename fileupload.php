<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your File</h1><br>
    <p>
        <?php
            $handle = fopen($_FILES['file']['tmp_name'],"r");
            while(!feof($handle)){
                $text = fgets($handle);
                echo $text,"<br>";
            }
            fclose($handle);
            
        ?>
    </p>

</body>
</html>