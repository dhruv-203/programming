<?php 
$str1=file_get_contents("test.txt");
$str2=file_get_contents("test2.txt");
$str3=$str1."\n\n\n".$str2;
$file=fopen("test3.txt","w");
fwrite($file,$str3);
fclose($file);
?>