<?php
$cars = array("Volvo","BMW", "Toyota","merc");
print_r($cars);
$text = implode(",",$cars); // imoplode array to string  
echo $text."\n";
$automobile=explode(",",$text);  // explode string to array
print_r($automobile);

list($a,$b)=$automobile;  // assings the first two values of array to a and b (not neccessary that a and b are equal)
echo $a."\n";
echo $b."\n";
$age= array("peter"=>"35","joe"=>"43","ben"=>"37");
extract($age);  // extract variables from an array
echo $peter."\n";


?>