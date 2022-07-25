<?php
$array1=array('first1'=>1,'second'=>2,'third'=>3,'fourth'=>4,'fifth'=>54);
$array2=array('first'=>1,'second'=>2,'third'=>0,'fourth'=>5,'fifth'=>3,'sixth'=>2,'seventh'=>7);
/*
key diff value same not in difference example second and sixth key has same values
key same value different then it will be in difference example third and third
*/
$tmp=array_diff($array1, $array2);
$unique=$tmp;
// print_r($tmp);
// echo "\n\n";
$tmp=array_diff($array2,$array1);
// print_r($tmp);
// echo "\n\n";
$unique+=$tmp;
foreach ($unique as $key => $value) {
    echo "The Unique $key are: ".$value."\n";
}
?>
