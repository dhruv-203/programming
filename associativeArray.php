<?php
$user=array();
$toggle=true;
while($toggle){
    $x=readline("Enter User ID: ");
    if($x=="-1"){
        $toggle=false;
        break;
    }
    $x_value=readline("Enter Password: ");
    $user[$x]=$x_value; // pushing key,value pair in array 
}
foreach ($user as $x => $x_value) {
    echo $x . "= ".$x_value."\n";
}

?>