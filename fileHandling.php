<?php  
$fileHandler = fopen("test.txt","r") or die("lol!!");
$text = fread($fileHandler,filesize("test.txt"));
fclose($fileHandler);
echo $text."\n\n"."with fgets";
$fileHandler = fopen("test.txt","r") or die("lol!!");
while(!feof($fileHandler)){
    echo fgets($fileHandler);
}
fclose($fileHandler);

$fileHandler = fopen("test.txt","r") or die("lol!!");
echo "\n\n\n"."with fgetc";
while(!feof($fileHandler)){
    $text = fgetc($fileHandler);
    echo $text;
}
fclose($fileHandler);
echo "hello...\n\n\n";
$fileHandler = fopen("test.txt","r") or die("lol!!");
$text=file_get_contents("test.txt");
echo $text;
fclose($fileHandler);
if(file_exists("test_1.txt")){
    echo "i exists";
}
else{
    echo "I dont exists";
}


?>