<?php
$line= (int) readline("Enter a Number: ");
$icount=$line;
$n=0; 
while($icount>0){
$jcount=0;
$r=0;
while($jcount<$icount){
    echo " ";
    $jcount++;
}
while($r<=$n){
    echo ((factorial($n))/(factorial($r)*factorial($n-$r)))." ";
    $r++;
}
echo "\n";
$icount--;
$n++;
}
function factorial($num){
    if($num==1||$num==0){
        return 1;
    }
    return $num*factorial($num-1);
}
?>

