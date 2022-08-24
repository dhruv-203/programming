<?php
abstract class parents{
    public $name;
    public $pocketmoney;
    protected function __construct($name,$pocketmoney){
        $this->name=$name;
        $this->pocketmoney=$pocketmoney;
    }
    abstract function pocket_Money();
}
interface animal{
    function makeSound();
    function moves();
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
        parent::__construct($parentname,$pocketmoney);
        $this->age=$age;
    }
}
$obj = new child("Dhruv","19","Vinodbhai",3500);
?>