<?php
$urls=array();
for($i=0;$i<5;$i++){
    $tmp=readline("Enter The Url: ");
    array_push($urls,$tmp);
}
$seprated=array();
foreach ($urls as $url ) {
    array_push($seprated,explode("/",$url));
}
foreach($seprated as $seprate){
    foreach ($seprate as $value) {
        echo $value . "  ";
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
    array_push($final_sep,$url);
}


$replaced_vowel_array=array();
foreach ($final_sep as $url ) {
    array_push($replaced_vowel_array,explode("/",$url));
}    
    
  print_r($replaced_vowel_array);  

    echo "\n\n";



?>
