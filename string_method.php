// string methods
<?php
$text="My Name is Dhruv Patel And i Am in 2 year";
// echo is also a string method which prints the given string
echo strlen($text)."\n";    // returns the length of a string it returns total characters

echo str_word_count($text)."\n";  //returns the word count of the string  and it returns no. of words here 10 (since 2 is not a word if we add 2nd then it will give 11)


echo strrev($text)."\n"; // it reverses the whole string


echo substr("Hello world",7)."\n"; //return the part of the string 7 is the starting index

echo strpos($text, "Dhruv")."\n"; // it returns first position index of the given word/character


echo str_replace("My", "your", $text)."\n";  // it replaces all the strings with the given new string 

echo str_ireplace("my", "your", $text)."\n"; //Case-insensitive version of str_replace()


echo str_shuffle($text)."\n"; // this will randomly shuffles the characters of a string

print_r(str_split($text)); // converts a string into array each character becomes an array element

echo "\n";

$text2="<p>hello world</p><div><p>hello</p></div>";
echo strip_tags($text2)."\n"; // strips all html and php tags used in the string

echo strtolower($text)."\n"; // returns all string with all characters in lower case

echo strtoupper($text)."\n"; // returns all string with all characters in upper case
$text3="   fwhfwheof     ";
echo trim($text3); // trims all the whitespace from beginning and ending
echo "\n";


print(ucfirst($text)); // makes first letter of string capital 
echo "\n";

print(ucwords($text," ")); // makes first letter of every word capital
echo "\n";

$text = "A very long woooooooooooord.";
$newtext = wordwrap($text, 8, "\n", true);  // word wrap wraps the string into the lines each line with given characters
echo "$newtext\n\n";

$newtext = wordwrap($text, 8, "\n", false);
echo "$newtext\n\n"; // this will not break the wooooooooooord even if it exceeds the wrap limit 


$str = "Welcome to my humble Homepage!";
echo $str."\n";
echo addcslashes($str,'m')."\n";//The addcslashes() function returns a string with backslashes in front of the specified characters
echo addcslashes($str,'H')."\n";
$str= addcslashes($str,"a...z");
echo $str."\n"; // adds \ infront of every character
$str = stripcslashes($str);  
echo $str."\n"; // remove \ infront of every character
$str = addslashes('What does "yolo" mean?');
echo($str)."\n";     //The addslashes() function returns a string with backslashes in front of predefined characters. like '' "" \ NULL 

$str = "Hello World!";
echo $str . "\n";       //The chop() function removes whitespaces or other predefined characters from the right end of a string.
echo chop($str,"World!");


//The chr() function returns a character from the specified ASCII value.

//The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.

echo chr(52) . "\n"; // Decimal value
echo chr(052) . "\n"; // Octal value
echo chr(0x52) . "\n"; // Hex value

// The chunk_split() function splits a string into a series of smaller parts and adds the given character
$str = "Hello world!";
echo chunk_split($str,3,",")."\n";

$str = "Hello world!";
// Encode the string
$encodeString = convert_uuencode($str);//the convert_uuencode() function encodes a string.



echo $encodeString . "\n";

// Decode the string
$decodeString = convert_uudecode($encodeString);  //the convert_uudecode() function decodes a uuencoded string.
echo $decodeString."\n";


//The count_chars() function returns information about characters used in a string (for example, how many times an ASCII character occurs in a string, or which characters that have been used or not been used in a string).

/*
Parameters      count_chars(string,mode)

String - Required. The string to be checked
mode - Optional. Specifies the return modes. 0 is default. The different return modes are:
                    0 - an array with the ASCII value as key and number of occurrences as value
                    1 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences greater than zero
                    2 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences equal to zero are listed
                    3 - a string with all the different characters used
                    4 - a string with all the unused characters

*/ 
$str = "Hello World!";
echo count_chars($str,3)."\n";


$str = "PHP is pretty fun!!";
$strArray = count_chars($str,1);

foreach ($strArray as $key=>$value)
  {
echo "The character '".chr($key)."' was found $value time(s)\n";  // chr returns character of given ascii value 
  }

  //The parse_str() function parses a query string into variable

parse_str("name=Peter&age=43");
echo $name."\n";
echo $age."\n";
parse_str("name=Peter&age=43",$myArray);
print_r($myArray);
echo "\n";


echo strcmp("Hello world!","Hello world!");   // compares two strings for equality

?>
