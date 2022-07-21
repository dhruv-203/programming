<?php
$pudding['raspberry']=333;
$pudding['peach']=222;
$icecream['raspberry']=333;
$icecream['boom']=555;
print_r($icecream);
print_r($pudding);
$difference=array_diff($icecream,$pudding);
foreach ($difference as $key => $value) {
    echo $key,":",$value,"\n";
}

?>
