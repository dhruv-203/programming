<?php
$urls=array();
for($i=0;$i<5;$i++){
    $tmp=readline("Enter The Url: ");
    array_push($urls,$tmp);
}
$seprated=array();
foreach ($urls as $url ) {
    array_push($seprated,explode("/",$url));   // seprating each url by / pushing the array(obtained from explode) inside an array
}
foreach($seprated as $seprate){
    foreach ($seprate as $value) {
        echo $value . "  ";             //printing the values seprated by /
    }
    echo "\n\n";
}
$vowels=array('a','e','i','o','u','A','E','I','O','U');
// replacing with vowel with *
$final_sep=array();
foreach($urls as $url){
    foreach($vowels as $vowel){
        $url=str_replace($vowel,"*",$url);
    }
    array_push($final_sep,$url);    // first we replace vowel directly from url and then break the url from /
}
$replaced_vowel_array=array();
foreach ($final_sep as $url ) {
    array_push($replaced_vowel_array,explode("/",$url));
}
  print_r($replaced_vowel_array);

    echo "\n\n";
// printing pattern
// creating an array containing the sums of first n natural numbers like [1,3,6,....]
$i=1;
$sums=array();
while($i<=70){
    $sum=0;
    $j=0;
    while($j<=$i){
        $sum+=$j;
        $j++;
    }
    array_push($sums,$sum);
    $i++;
}
// print_r($sums);
function myFun($arr,$num){
    for($i=0;$i<sizeof($arr);$i++){
        if($arr[$i]>$num){
            return $i;
        }
    }
}
// print_r($replaced_vowel_array);
foreach ($replaced_vowel_array as $value) {
    foreach($value as $element){
        if($element==""){
            continue;
        }
        else{
        $arr= str_split($element);
        $tmp=sizeof($arr);
        $req_ind=myFun($sums,$tmp);
        $l=0;
        $mpt=$req_ind+1;
        for($i=0;$i<($req_ind+1);$i++){
            for($j=$mpt;$j>0;$j--){
                echo " ";
            }
            $mpt--;
            for($k=0;$k<=$i;$k++){
                if($l<$tmp){
                    echo $arr[$l];
                    $l++;
                }else{
                    echo "-";
                }
            }

            for($k=0;$k<$i;$k++){
                if($l<$tmp){
                    echo $arr[$l];
                    $l++;
                }
                else{
                    echo "-";
                }
            }
            echo "\n";
        }}}}
?>
