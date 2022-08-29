<?php
class maths{
    public static $a = "i am a variable of pi having some value";
    public static function fun(){
        echo "i am a function";
    }
}
class probablity extends maths{
    const WELCOME_MESSAGE = "Welcome to Probability class\n";
    public static $b = "3.14";
    function __construct()
    {
        self::fun();
    }
}
echo probablity::WELCOME_MESSAGE;
echo probablity::$a," ",probablity::$b."\n";
maths::fun();
echo "\n";
new probablity();
echo "\n";
?>