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
    echo $l."  ";
}
echo "\n";

// pascal's triangle 

$line= (int) readline("Enter a Number: ");
$icount=$line;
$n=0; 
while($icount>0){
$jcount=0;
$r=0;
while($jcount<$icount){
    echo " ";
    $jcount++;
}
while($r<=$n){
    echo ((factorial($n))/(factorial($r)*factorial($n-$r)))." ";
    $r++;
}
echo "\n";
$icount--;
$n++;
}
function factorial($num){
    if($num==1||$num==0){
        return 1;
    }
    return $num*factorial($num-1);
}





?>
