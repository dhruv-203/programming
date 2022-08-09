<?php
$filename=$_FILES['file']['tmp_name'];
header('Content-Description: File Transfer');
header('Content-Type: $_FILES["file"]["type"]');
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
readfile($filename);
?>

