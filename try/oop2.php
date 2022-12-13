<?php 
// abstract classes and Interfaces

// interface only allows public method, doesn't allows properties(variables)
// abstract allows public or protected methods 

abstract class myclass{
    public $variab = "I exist in abstract class";
    public function normie(){
        echo "i am normie";
    }
    abstract public function notNormie();
}

interface myinter{
    // public $var="NOT ALLOWED !!!";
    public function mymethod();
    public function editable($a);
}

class normanOsbon extends myclass implements myinter{
    public function notNormie(){
        echo "i am not a normie function from abstract class\n";
    }
    public function mymethod(){
        echo "i am from the interface";
    }
    public function editable($a){
        echo $a ;
    }

}

$obj = new normanOsbon();

