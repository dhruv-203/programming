<?php
$array1=array('first1'=>1,'second'=>2,'third'=>3,'fourth'=>4,'fifth'=>54);
$array2=array('first'=>1,'second'=>2,'third'=>4,'fourth'=>5,'fifth'=>7,'sixth'=>2,'seventh'=>7);
$tmp=array_diff($array1, $array2);
/*
key diff value same not in difference example second and sixth key has same values
key same value different then it will be in difference example third and third
*/
$unique=$tmp;
// print_r($tmp);
$tmp=array_diff($array2,$array1);
// print_r($tmp);
$unique+=$tmp;
foreach ($unique as $key => $value) {
    echo "The Unique Values are: ".$value."\n";
}
?>
