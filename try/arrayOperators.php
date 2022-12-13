<?php 

$arr =array("one"=>"1","two"=>"2","three"=>"3");
$arr1 =array("three"=>"3","four"=>"4","five"=>"5");
$arr2= array("one"=>1,"two"=>2,"three"=>3);
$Union = $arr+$arr1;
$Equality = $arr==$arr2;
$Identity = $arr===$arr2;
$Inequality = $arr!=$arr2; // another way of writing this is $arr <> $arr2
$Non_identity = $arr!==$arr2;

print_r($Union);
var_dump($Equality);
var_dump($Inequality);
var_dump($Identity);
var_dump($Non_identity);



?>