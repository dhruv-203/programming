<?php
    if(!intval($_GET['val'])) {
        echo "2";
    }
    else if(intval($_GET['val'])%2 == 0) {
        echo "1";
    } else {
        echo "0";
    }
?>