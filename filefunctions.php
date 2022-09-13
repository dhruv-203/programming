<?php  
$file = fopen("test.txt","r");
while($value=fscanf($file, "%s\t%s\t%s")){
    list($a,$b,$c)=$value;
    echo $a," ",$b," ",$c."\n";  // fscanf returns a parsed string according to defined format from a file of containing text
}
//An INI file is a configuration file for computer software that consists of a text-based content with a structure and syntax comprising key–value pairs for properties, and sections that organize the properties

//parse_ini_file() loads in the ini file specified in filename, and returns the settings in it in an associative array. 
echo "------ parse_ini_file ------- \n\n";
$values = parse_ini_file("sample.ini",true);
foreach ($values as $section => $key) {
    echo $section."\n";
    foreach ($key as $heading => $value) {
        echo $heading," : ",$value."\n";
    }
}
// print_r($values);
?>