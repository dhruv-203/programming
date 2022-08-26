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
    if (($_REQUEST['imap_x']>=679 and $_REQUEST["imap_x"]<=799) and ($_REQUEST['imap_y']>=156 and $_REQUEST["imap_y"]<276)){
        header("Location: https://en.wikipedia.org/wiki/Moon");
        echo $_REQUEST['imap_x']."  ".$_REQUEST['imap_y'];
    }
        else if(($_REQUEST['imap_x']>=0 and $_REQUEST["imap_x"]<1479) and ($_REQUEST['imap_y']>=220 and $_REQUEST['imap_y']<430)){
            header("Location: https://www.britannica.com/science/mountain-landform");
        }
         
        else if(($_REQUEST['imap_x']>=0 and $_REQUEST["imap_x"]<=1479) and ($_REQUEST['imap_y']>=435 and $_REQUEST["imap_y"]<550)){
            header("Location: https://dictionary.cambridge.org/dictionary/english/river");
        }

?>
</body>
</html>