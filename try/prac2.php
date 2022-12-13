<?php
function getInput(){
$arr=array();
for($i = 0 ; $i<3 ; $i++){
    $arr[$i] = readline("Enter Marks for subject ${i}: ");
}
return $arr;
}
$Student1 = getInput();
$Student2 = getInput();
$Student3 = getInput();
$choice = readline("Enter Your Choice: ");
switch($choice){
    case 1:
        $percent = ($Student1[0]+$Student1[1]+$Student1[2])/3;
        break;
    case 2:
        $percent = ($Student2[0]+$Student2[1]+$Student2[2])/3;
        break;
    case 3: 
        $percent = ($Student3[0]+$Student3[1]+$Student3[2])/3;
        break;
}
echo "Student${choice} Percentage is : ${percent}\n";
if($percent>80.00){
    echo "Congratulations You've Passed with First Grade";
}
elseif($percent>60.00&&$percent<80.00){
    echo "Congratulations You've Passed with First Grade";
}
elseif($percent>30){
    echo "you've Passed";
}
else{
    echo "You're Failed";
}
?>