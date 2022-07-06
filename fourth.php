//error is not solved
<?php
//Class example
define("pi",3.14);
	class Volume{
	  public function __construct($radius,$height){
	    $this->radius=$radius;
	    $this->$heigth=$heigth;
	  }
	  public function cal(){
	    return "The Volume of the Cylinder is: " .$this->radius*$this->radius*$this->$height;
	  }
	}
	$heigth= (float)readline("Enter the Height of the Cylinder");
	$radius= (float)readline("Enter the radius of Cylinder");
	$myobj= new Volume($radius,$height);
	$myobj->cal();
	
?>
