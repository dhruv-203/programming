<?php
// checking numeric string 
$x="123456789";
var_dump(is_numeric($x));
$y= 123456789;
$z="i am not a number";
var_dump(is_numeric($y));
var_dump(is_numeric($z));

// cast int to float 
$x=45.65;
$y=98;

echo (int)$x;
echo (float)$y;

// string to int and float
$y= "123456789";
$y=(int)$y;
var_dump($y);
$y= "123456789";
$y=(float)$y;
var_dump($y)


?>
