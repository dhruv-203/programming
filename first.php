<?php
// Your code here!
    echo "Hello There This is Dhruv Patel Here" . "\n";
    $color="Red";
    echo "My fav color is: " . $color . "\n";
    function myhouse() {
        global $color; 
        static $x=54;
        echo "$x";
        $x--;
        echo "variable color inside a function: $color \n";
    }
    myhouse();
    myhouse();// the x value remains static even on calling it three time in every time x=54 but the value remains constant
    myhouse();
    echo "color variable outside a function: " . $color;
    
?>
