<?php
abstract class parents{
    public $name;
    public $pocketmoney;
    function __construct($name,$pocketmoney){
        $this->name=$name;
        $this->pocketmoney=$pocketmoney;
    }
    abstract function pocket_Money();
}
interface animal{
    function makeSound();
    function moves();
}

class Dog implements animal{
    function makeSound()
    {
        echo "Dog barks\n";
    }
    function moves(){
        echo "Dog walks on four legs\n";
    }
}

class child extends parents{
    public $name;
    public $age;
    function pocket_Money()
    {
        echo "i am getting $this->pocketmoney per month and i am spending on my commute and for eating food";
    }
    function __contruct($childName,$age,$parentname,$pocketmoney){
        $this->name=$childName;
        $this->age=$age;
        parents::__construct($parentname,$pocketmoney);
    }
}
$obj = new child("Dhruv","19","Vinodbhai",3500);
$obj1 = new Dog();
$obj1->makeSound();
$obj1->moves();
?>