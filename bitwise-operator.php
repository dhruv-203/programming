<?php
$x=5;
$y=7;
echo "The OR operation b/w the $x and $y: ". ($x|$y). "\n";
echo "The AND operation b/w the $x and $y: ". ($x&$y). "\n";
echo "The XOR operation b/w the $x and $y: ". ($x^$y). "\n";
echo "The NOT operation of $x : " . ~$x. "\n"; // here tilde ko yaad rakhne k liye isse yaad rakho ki 
// positive  number mai 0-(number hai wooh) total numbers hote woh with a negative sign like for x=5 the answer is -6 because 0-5 mai total 6 digits aate hai

echo "The left shift  operation of the $x : ".($x << 2)."\n";
echo "The right shift  operation of the $x : ".($x >> 2)."\n";

$output=`date`;
echo $output . "\n";

 echo "heelo". "world",$x*$y,"i am concatenation";
 $x="heelo";
 $y="world";
 $x.=$y;
 echo $x."\n";

$x=45;
$y=54;
 echo ($x===$y)?"equals":"not equals"."\n";
 $z=$l??"i aam not l";
 echo $z."\n";
 $z=$y??"i am not assingned as y exists\n";
 echo $z."\n";

$num1 =(int) readline("Enter a Number: ");
$num2 = (int) readline("Enter a Number: ");
$num3 = (int) readline("Enter a Number: ");

$min =  ($num1<$num2&&$num1<$num3)?"The Smallest is $num1":(($num2<$num1&&$num2<$num3)?"The Smallest is $num2":(($num3<$num2&&$num3<$num1)?"The Smallest is $num3":"sorry some error occured"));
echo $min."\n";

$max=($num1>$num2&&$num1>$num3)?"The largest is $num1":(($num2>$num1&&$num2>$num3)?"The Largest is $num2":(($num3>$num2&&$num3>$num1)?"The Largest is $num3":"sorry some error occured"));
echo $max."\n";


?>