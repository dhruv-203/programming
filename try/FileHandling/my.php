<?php
//opening a file 
/*
fopen(filename,mode) 
mode: 
r: read mode only opens the file in read mode and returns false if file doesn't exists 
r+: open read and writing purpose
w: only writing is allowed and truncate the file to zero size. if file doesn't exists then attempts to create it
w+: reading and writing is allowed and truncate the file to zero size. if file doesn't exists then attempts to create it
a: only for appending , if file doesn't exists attempts to create it
a+: opened for read and write in file and starts writing from the end of the file and if file does't exists then attempt to creat it 
x: create an open for writing only, if file already exists, then fopen() it will return false 
x+: create an open for reading and writing, if file already exists, then fopen() it will return false 
*/

// writting and appending in file 
/*
fwrite(stream,string);
*/ 

if($h = fopen("dhruv.txt","w+")){
    fwrite($h,"lashflashfiafioqhefojlckn.cz.czncalkfeihfilclzmcz czlknklchilfheio"); // writing into a file
}
else{
    echo "lol!!";
}
// reading file methods are 
/*
fread(Resource stream,int bytes_to_read); filesize() is used to get the byte size of file
file_get_contents(filename); returns string 
fgets(stream) reads a line from file stop if EOF or newline character found and put the file pointer to next line 
fgetc(stream) reads a character by character of file and stops at EOF
file(filename) returns an array with elements are the lines of the file
*/
if($h = fopen("test.txt","r")){
    $text = fread($h,filesize("test.txt"));
    fclose($h);
    echo "with fread(): \n ${text}\n\n\n";
    $text = file_get_contents("dhruv.txt");
    echo "with file_get_contents(): \n ${text}\n\n\n";
}
else{
    echo "LOL!!!";
}
if($h = fopen("test.txt","r")){
echo "with fgets(): \n";
while(!feof($h)){
    echo fgets($h);
}
fclose($h);
}
else{
    echo "lol!!!";
}
echo "\n\n\nwith file(): \n";
$arr = file("test.txt");
foreach($arr as $line){
    echo $line."\n";
}
// similar for fgetc no difference


// parsing a file using fscanf(stream,exact_format_file);
if($h = fopen("test1.txt","r")){  // takes the exact format of the file
    while($name = fscanf($h,"%s\t%s\n")){
        print_r($name);
    }
}
else{
    echo "lol";
}
//for parsing .ini files there is function called parse_ini_file which returns a multidimensional array 






?>