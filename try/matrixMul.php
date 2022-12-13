<?php
function getMatrix(int $m, int $n){
    $A = array();
    for($i=0;$i<$m;$i++){
        $tmp_row = array();
        for($j=0;$j<$n;$j++){
            array_push($tmp_row,(int) readline("Enter value at ${i}th row and ${j} column: "));
        }
        array_push($A,$tmp_row);
    }
    return $A;
}

function Multi(array $A, array $B){
    $C = array();
    for($i=0;$i<sizeof($A);$i++){
        $temp_row = array();
        for($j=0;$j<sizeof($B[0]);$j++){
            $c = 0;
            for($k=0;$k<sizeof($B);$k++){
                $c+=$A[$i][$k]*$B[$k][$j];
            }
            array_push($temp_row,$c);
        }
        array_push($C,$temp_row);
    }
    print_r($C);
}

$A = getMatrix(2,2);
$B = getMatrix(2,2);
Multi($A,$B);
// print_r($A);
// print_r($B);
?>