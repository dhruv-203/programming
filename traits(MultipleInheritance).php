<?php
// applying multiple inheritance through traits
trait message1{
function calcsq($l,$b){
return $l*$b;
}
function displayre(){
$result = message1::calcsq(4,5);
return $result;
}
}
trait message2{
    function calcre($l){
    return $l*$l;
    }
    function displaysq(){
    $result = message2::calcre(4);
    return $result;
    }
    }
class printer{
    use message1,message2;
}
$obj = new printer();
echo $obj->displayre(),$obj->displaysq();
?>