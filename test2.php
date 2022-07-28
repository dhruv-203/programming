<?php
$pudding=array('raspberry'=>333,'peach'=>222);
$icecream=array('pecan'=>111,'chocolate'=>999);
print_r($pudding);
print_r($icecream);
$dessert=$pudding+$icecream;
print_r($dessert);
// == same elements; === same element in the same order
if($pudding==$icecream){
  echo "same\n";
  
  }
else{
  echo "Difference\n";
}


$pudding=array('raspberry'=>333,'peach'=>222);
$icecream=array('peach'=>222,'raspberry'=>333);
print_r($pudding);
print_r($icecream);
$dessert=$pudding+$icecream;
print_r($dessert);
// == same elements; === same element in the same order
if($pudding==$icecream){
  echo "SAME\n"; 
  }
else{
  echo "DIFFERENT\n";
}


?>
