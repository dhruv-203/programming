<?php
// to calculate sum of Prime number from 1 to 100
//to display the fibonaaci series first 20 numbers
// display pascal triangle in the triangle 

// prime number
$sum=0;
$num=2; //since 1 is not a prime number
while($num<=100){
$tmp=2;
$check=true;
while($tmp<$num){
        $check = ($num%$tmp==0)?false:true;
        if(!$check){
            break;
        }
        $tmp++;
}
if($check){
    $sum+=$num;
}
$num++;
}
echo "The Sum of 1-100 Prime Numbers: ".$sum."\n";

// fibonaaci series
// fibonaaci mai first two terms fixed hote hai
$number=array(0,1);
$con=2;
while($con<20){
    array_push($number,($number[$con-1]+$number[$con-2])); // array_push is used like append in python 
    $con++;
}
foreach($number as $l){
    echo $l."\n";
}

// pascal's triangle 



?>
