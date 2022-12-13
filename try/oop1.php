<?php 
// types of inheritances 

// single inheritance 

class parentClass{
    public $myvar;
    const thisConst = "hello thingy";
    public function __construct($name){
        $this->myvar = $name;
    }
    public function myfun(){
        echo "hello world {$this->myvar}";
    }
}

class subClass extends parentClass{
    public $plough = "bye bye";
    //method overriding
    public function myfun(){
        echo "goodbye {$this->myvar} {$this->plough}";
    }
    //method overloading 
    function __call($method,$argument){
        if($method=="area"){
            switch(count($argument)){
                case 0:
                    echo "\nNo area existed\n";
                    break;
                case 1:
                    echo "{$argument[0]} is area\n";
                    break;
                case 2:
                    echo "{$argument[0]} and {$argument[1]} are the area\n";
                    break;
                }

        }
    }
}

$obj = new subClass("dhruv");
$obj->myfun();
$obj->area();
$obj->area(45);
$obj->area(45,65);

// applying multiple inheritance 
trait mytrait{
    public $vary = "this vary";
    protected function  mymeth(){
        echo "hello world";
    }
}
trait mytrait1{
    public $vary1 = "this vary1";
    protected function  mymeth1(){
        echo "hello world1";
    }
}
class myclass{
    use mytrait, mytrait1;
    public function __construct(){
        $this->mymeth();
        $this->mymeth1();
    }
}
$obj = new myclass();
// $obj->mymeth(); protected method
?>