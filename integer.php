<?php
$num=45;
$text="hello";
echo "The Maximum value that can be supported in Int: ", PHP_INT_MAX,"\n";
echo "The Minimum value that can be supported in Int: ", PHP_INT_MIN,"\n";
echo "The Size of Int: ", PHP_INT_SIZE,"\n";

// is_int();
// is_integer();
//is_long();
var_dump(is_int($num));
var_dump(is_int($text));
?>
