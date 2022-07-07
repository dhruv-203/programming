
<?php
//Class example
define("pi",3.14);
	class Volume{
	  public function __construct($radius,$heigth){
	    $this->radius=$radius;
	    $this->heigth=$heigth;
	  }
	  public function cal(){
	    return "The Volume of the Cylinder is: " .$this->radius*$this->radius*$this->heigth;
	  }
	}
	$heigth= (float)readline("Enter the Height of the Cylinder");
	$radius= (float)readline("Enter the radius of Cylinder");
	$myobj= new Volume($radius,$heigth);
	echo $myobj->cal();
  	
?>
