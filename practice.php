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
        if(($_REQUEST['imap_x']>=0 and $_REQUEST["imap_x"]<500) and ($_REQUEST['imap_y']>=0 and $_REQUEST['imap_y']<100)){
            echo "hello i am in area 1";
        }
        else if (($_REQUEST['imap_x']>=900 and $_REQUEST["imap_x"]<=1400) and ($_REQUEST['imap_y']>=0 and $_REQUEST["imap_y"]<100)){
            echo "i am in Area 2";
        }
        else{
            echo "i am anywhere";
        }

?>
</body>
</html>