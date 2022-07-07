<?php
$num=45.6598;
var_dump($num);

echo "The largest possible floating point number: ", PHP_FLOAT_MAX, "\n";
echo "The largest possible floating point number: ", PHP_FLOAT_MIN, "\n";
echo "the smallest Negative floating point: ", -PHP_FLOAT_MAX, "\n";
echo "Value: ",PHP_FLOAT_DIG,"\n";
echo "Value: ",PHP_FLOAT_EPSILON,"\n";


// finite and infinite check
$x=411e1234;
var_dump($x);
var_dump(is_finite($x));
var_dump(is_infinite($x));

?>
