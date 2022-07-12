<?php
$studen1=array(45,87,98);
$studen2=array(95,87,98);
$studen3=array(45,65,45);
$choice=readline("Enter Your Choice: ");
switch($choice){
  case 1:
    $percent=(($studen1[0]+$studen1[1]+$studen1[2])/3);
    echo "You have Scored ".round($percent,2)."%\n";
    break;
  case 2:
    $percent=(($studen2[0]+$studen2[1]+$studen2[2])/3);
    echo "You have Scored ".round($percent,2)."%\n";
    break;
  case 3:
    $percent=(($studen3[0]+$studen3[1]+$studen3[2])/3);
    echo "You have Scored ".round($percent,2)."%\n";
    break;
}
if ($percent>80){
  echo "You Passed with Distinction";
} 
else if($percent<80&&$percent>60){
  echo "You have Passed with First Class";
}
else if($percent<65&&$percent>35){
  echo "You have Passed ";
}
else{
  echo "You have Failed!!";
}
?>