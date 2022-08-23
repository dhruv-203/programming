<?php   

class person{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }
    function getter(){
        echo $this->name ." is person\n";
    }

}
class student extends person{
    function student_getter(){
        echo "hello this is student $this->name\n";
    }
}
$name=readline("Enter Name: ");
$obj = new student($name);
$obj->getter();
$obj->student_getter();



?>