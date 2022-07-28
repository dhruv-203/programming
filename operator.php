<?php
$x=45;
$y=78;
// assingment operator 
$x=$y;
echo $y. "\n";
$x=45;
$y=78;
$x+=$y;
echo $x. "\n";
$x=45;
$y=78;
$x-=$y;
echo $x. "\n";
$x=45;
$y=78;
$x*=$y;
echo $x. "\n";
$x=45;
$y=78;
$x/=$y;
echo $x. "\n";
$x=45;
$y=78;
$x%=$y;
echo $x. "\n";
$x=45;
$y=2;
$x**=$y;
echo $x. "\n";

// arithematic operator ;
$x=45;
$y=5;
echo "the addition: ", $x + $y , "\n";
echo "the subtraction: ". ($x - $y) . "\n";
echo "the multiplication: ". $x * $y . "\n";
echo "the divison: ". $x / $y. "\n";
echo "the modulo: ". $x%$y. "\n";
echo "power operator; ". $x**$y. "\n";

// comparison operators
$x=100;
$y="100";
echo "Equal\t". var_dump($x==$y). "\n";
echo "Identical\t". var_dump($x===$y). "\n";
echo "Not-Equal\t". var_dump($x!=$y). "\n";
echo "Not-Equal\t". var_dump($x<>$y). "\n";
echo "not identical\t". var_dump($x!==$y). "\n";
echo "Greater than\t". var_dump($x>$y). "\n";
echo "Less than\t". var_dump($x<$y). "\n";
echo "Greater than or Equal\t". var_dump($x>=$y). "\n";
echo "less than or Equal\t". var_dump($x<=$y). "\n";
print("\n\n\n");

$x=10;
$y=5;
echo "spaceship for x>y: ". var_dump($x<=>$y). "\n";

$x=10;
$y=15;
echo "spaceship for x<y: ". var_dump($x<=>$y). "\n";

$x=5;
$y=5;
echo "spaceship for x=y: ". var_dump($x<=>$y). "\n";
print("\n\n\n");

$y=7;
$x=5;

$z=$y++;
$y=$x++;
$x=$z++;
echo "x = $x    y = $y     z = $z \n";


$z=++$y;
$y=++$x;
$x=++$z;
echo "x = $x    y = $y     z = $z","\n";

//Logical operators and bitwise operators
$x=45;
$y=78;
$z=45;

echo "i am returing null value on printing ",(($x==$y) and ($x==$z)),"    null", "\n";
var_dump(($x==$y) and ($z==$x));
// echo "\n";
echo (($x==$y) or ($z==$x)), "\n";
echo (($x==$y) xor ($z==$x)), "\n";
echo (($x==$y) && ($z==$x)), "\n";
echo (($x==$y) || ($z==$x)), "\n";
echo !(($x==$y) and ($z==$x)), "\n";
?>