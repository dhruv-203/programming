<?php   

class person{
    protected $name;
    function __construct($name)
    {
       $this->name=$name;
    }
    protected function setter($name){
        $this->name=$name;
    }
    protected function getter(){
        echo $this->name ." is person\n";
    }
    function walk(){
        echo "person walks\n";
    }


}
class student extends person{
   public $standard;
   function __construct($standard,$name)
   {
    // $this->name=$name;
    parent::__construct($name);  //parent is equivalent to super in python and we class put the class name instead of parent
    $this->standard=$standard;
    $this->student_getter();
    person::getter();  //calling the protected method outside the class
   }
    function student_getter(){
        echo "hello this is student $this->standard\n";
    }
    function walk(){     // method overriding
        echo "student walks\n";
        person::walk();
    }
    function __call($method,$arguments){     // method overloading.....
        if($method=="speaks"){
            if(count($arguments)==0){
                echo "speaking......\n";
            }
            if(count($arguments)==1){
                echo "$arguments[0] is speaking\n";
            }
            if(count($arguments)==2){
                echo $arguments[0]." is saying ". $arguments[1]."\n";
            }
        }
    }
    // this __call is activated when an undeclared function is called then it goes to __call and $arguments is the array and we can apply if condition to access methods 
    function __destruct()
    {
        
    }

}
$name=readline("Enter Name: ");
$standard= readline("Enter Your Standard: ");
$obj = new student($standard,$name);
$obj->walk();
$obj->speaks();
$obj->speaks("dhruv");
$obj->speaks("dhruv","i am done");




?>