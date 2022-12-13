<?php 
// main code
//a
$arr = array();
for($i=1;$i<21;$i++){
    array_push($arr,getFibonacci($i));
}
print_r($arr);
echo "\n\n\n";
//b
$sum = 0;
for($i=1;$i<101;$i++){
    if(isPrime($i)){
        $sum+=$i;
    }
    else{
        continue;
    }
}
print($sum);
echo "\n\n\n";
$level=5;
$space=$level;
for($i = 0;$i<=$level;$i++){
    for($j=0;$j<$space;$j++){
        echo " ";
    }
    for($r=0;$r<=$i;$r++){
        echo " ".getPascalElem($i,$r)." ";
    }
    echo "\n";
    $space--;
}
echo "\n\n\n";
$check=true;
$userList=array();
while($check){
    $x=readline("Enter the username: ");
    if($x==-1){break;}
    $userList[$x]=readline("Enter Password: ");
}
foreach($userList as $username=>$password){
    echo $username.": ".$password."\n";
}

// Functions
function getFibonacci(int $i){
    if($i==1){
        return 0;
        }
    elseif($i==2){
        return 1;
    }
    else{
        return getFibonacci($i-1)+getFibonacci($i-2);
    }
}

function isPrime(int $i){
    if($i==1){
        return false;
    }
    for($j = 2 ; $j < $i ; $j++){
        if($i%$j==0){
            return false;
        }
        else{
            continue;
        }
    }
    return true;
}

function getFactorial(int $i){
    if($i==1||$i==0){
        return 1;
    }
    else{
        return $i*getFactorial($i-1);
    }
}

function getPascalElem(int $n,int $r){
    // $n -> level of the pascal triangle
    // $r -> loop counter for nCr

    return getFactorial($n)/(getFactorial($r)*getFactorial($n-$r));

}




?>