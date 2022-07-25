<?php

$row = (int) readline("Enter the Number of Rows of First Matrix: ");
$col_row = (int) readline("Enter the Number of column of First Matrix and Rows of Second Matrix: ");
$colb=(int) readline("Enter the Number of Columns of Second Matrix: ");
print("Taking inputs for A matrix");
$A = input($row,$col_row);
print("Taking inputs for B matrix");
$B = input($col_row,$colb);
// output($A);
// print("\n\n");
// output($B);
$C=multi($A,$B,$row,$col_row,$colb);
output($C);

 // c = summation k=1 to k=n (Aik*Bkj) where n is above input taken 
            // c is mxp 
//             int [][] C = new int [m][p];
//             for (int i = 0; i < m; i++) {
//                 for (int j = 0; j < p; j++) {
//                     int c=0;
//                     for(int k=0;k<n;k++){
//                         c+=(A[i][k]*B[k][j]);
//                     }
//                     C[i][j]=c;
//                 }
//             }


function multi($A,$B,$row,$col_row,$colb){
    $C=array(); // final size of C is row*colb
    $j=0; // colb counter
    
    while($j<$colb){
        $i=0; // row counter
        $tmp=array();
        while($i<$row){
            $k=0; // col_row counter
            $c =0; // current element
            while($k<$col_row){
                $c+=($A[$j][$k]*$B[$k][$i]);
                $k++;
            }
            array_push($tmp,$c);
            $i++;
        }
        array_push($C,$tmp);
        $j++;
    }
    return $C;
}


function input($row,$column){
    $A= array();
    $col_counter=0;
    while($col_counter<$column){
        $tmp=array();
        $row_counter=0;
        while($row_counter<$row){
            $element=(int)readline("Enter i = $col_counter and j =  $row_counter element: ");
            array_push($tmp,$element);
            $row_counter++;
        }
        // print_r($tmp);
        // echo "\n";
        array_push($A,$tmp);
        $col_counter++;
    }
    return $A;
}
function output($matrix){
    foreach ($matrix as $row) {
        foreach ($row as $elem) {
            print("$elem  ");
        }
        print("\n");
    }
}


?>