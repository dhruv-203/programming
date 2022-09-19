<?php
$file = fopen("test.txt","r+");
$str = file_get_contents("test.txt");
// echo $str;
$str.="\nhello";
if(flock($file,LOCK_EX|LOCK_NB)){
    fread($file,15);
    flock($file,LOCK_UN);
}
else{
    echo "Error in locking";
} 
fclose($file);
?>
