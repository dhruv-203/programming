<?php
session_start();
session_unset();
echo "hello";
session_destroy();
header('Location:http://localhost/programming/MinorProject/index.php');
?>