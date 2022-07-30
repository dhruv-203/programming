// string methods
<?php
$text="My Name is Dhruv Patel And i Am in 2 year";
// echo is also a string method which prints the given string
echo strlen($text)."\n";    // returns the length of a string it returns total characters

echo str_word_count($text)."\n";  //returns the word count of the string  and it returns no. of words here 10 (since 2 is not a word if we add 2nd then it will give 11)

$str = bin2hex("Hello World!");//The bin2hex() function converts a string of ASCII characters to hexadecimal values. The string can be converted back using the pack() function.
echo($str)."\n";
echo pack("H*",bin2hex($str))."\n";

echo strrev($text)."\n"; // it reverses the whole string


echo substr("Hello world",7)."\n"; //return the part of the string 7 is the starting index

echo substr_count("Hello world. The world is nice","world"); //The substr_count() function counts the number of times a substring occurs in a string.

echo substr_compare("Hello world","Hello world",0);  //The substr_compare() function compares two strings from a specified start position.

echo strpos($text, "Dhruv")."\n"; // it returns first position index of the given word/character


echo str_replace("My", "your", $text)."\n";  // it replaces all the strings with the given new string 

$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);

echo str_ireplace("my", "your", $text)."\n"; //Case-insensitive version of str_replace()


echo str_shuffle($text)."\n"; // this will randomly shuffles the characters of a string

print_r(str_split($text)); // converts a string into array each character becomes an array element

echo "\n";
echo hex2bin("48656c6c6f20576f726c6421");//The hex2bin() function converts a string of hexadecimal values to ASCII characters.
echo "\n";

$str = "Hello world. It's a beautiful day.";
$str = (explode(" ",$str));    // the explode() function returns an array from the given string
print_r($str);
echo "\n";
$str = implode(" ",$str);   //The implode() function returns a string from the elements of an array.
print_r($str);
echo "\n";

$str = (explode(" ",$str));
$str = join("",$str);   //alias of the implode
print($str);

$text2="<p>hello world</p><div><p>hello</p></div>";
echo strip_tags($text2)."\n"; // strips all html and php tags used in the string

echo strtolower($text)."\n"; // returns all string with all characters in lower case

echo strtoupper($text)."\n"; // returns all string with all characters in upper case
$text3="   fwhfwheof     ";
echo trim($text3); // trims all the whitespace from beginning and ending
echo "\n";
$text3="   fwhfwheof     ";
echo ltrim($text3);
echo "\n";
$text3="   fwhfwheof     ";
echo rtrim($text3);
echo "\n";


print(ucfirst($text)); // makes first letter of string capital 
echo "\n";
echo lcfirst("Hello world!")."\n";   // converts the first character to lowercase

print(ucwords($text," ")); // makes first letter of every word capital
echo "\n";

echo levenshtein("Hello World","ello World");  //The levenshtein() function returns the Levenshtein distance between two strings.

//The Levenshtein distance is the number of characters you have to replace, insert or delete to transform string1 into string2.

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
$str = stripslashes($str);
echo  ($str)."\n"; // strips the slashes added by addslashes
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

$str = "Hello";
echo md5($str);
//The md5() function calculates the MD5 hash of a string.

// The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.

$number = 1234.56;
setlocale(LC_MONETARY,"en_US");//The setlocale() function sets locale information.
// Locale information is language, monetary, time and other information specific for a geographical area.
echo money_format("The price is %i", $number);//The money_format() function returns a string formatted as a currency string.


echo number_format("1000000.665468")."\n";
echo number_format("1000000.68684684",2)."\n";
echo number_format("1000000.646",2,",",".");


echo ord("h")."\n";  //The ord() function returns the ASCII value of the first character of a string.
echo ord("hello")."\n";

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);  //The printf() function outputs a formatted string.

echo similar_text("Hello World","Hello Dhruv");  //The similar_text() function calculates the similarity between two strings.

// It can also calculate the similarity of the two strings in percent.

//Syntax similar_text(string1,string2,percent)  percent takes the variable which can store the percent value
similar_text("Hello World","Hello Dhruv",$percent);
echo $percent;


$str = "Assistance";
$str2 = "Assistants";  // both has same soundex value because of same pronunciation

echo soundex($str);
echo "\n";
echo soundex($str2);//The soundex() function calculates the soundex key of a string.
echo "\n";

// A soundex key is a four character long alphanumeric string that represent English pronunciation of a word.

$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);//The sprintf() function writes a formatted string to a variable.
echo $txt;
echo "\n";

$str = "If you divide 4 by 2 you'll get 2";
$format = sscanf($str,"%s %s %s %d %s %d %s %s %c");//The sscanf() function parses input from a string according to a specified format. The sscanf() function parses a string into variables based on the format string.
print_r($format);



$str = "Hello World";
echo str_pad($str,20,".");  //The str_pad() function pads a string to a new length.  to make thr str_len 20 it will append 9 fullstops "." in string

echo str_repeat("Wow",13)."\n";  //The str_repeat() function repeats a string a specified number of times.

var_dump(strcasecmp("Hello world!","HELLO WORLD!"));  //The strcasecmp() function compares two strings.  //If this function returns 0, the two strings are equal.


echo strchr("Hello world!","world");  //The strchr() function searches for the first occurrence of a string inside another string.
//Returns the rest of the string or FALSE, if the string to search for is not found.


echo strstr("Hello world!","world"); // same as strchr


echo strcspn("Hello world!","w");  //The strcspn() function returns the number of characters (including whitespaces) found in a string before any part of the specified characters are found.

$str = "If you divide 4 by 2 you get 2";

echo strpos($str,"you")."\n";  // case-sensitive returns first occurenece of the string inside a parent string 
echo stripos($str,"YOU")."\n"; // case-insensitive returns first occurenece of the string inside a parent string 
echo strripos($str,"YOU")."\n";   // case-insensitive returns last occurenece of the string inside a parent string 
echo strrpos($str,"you")."\n"; // case-sensitive returns last occurenece of the string inside a parent string 

//The strnatcasecmp() function compares two strings using a "natural" algorithm.

// In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

echo strnatcasecmp("2Hello world!","10Hello WORLD!");
echo "\n";
echo strnatcasecmp("10Hello world!","2Hello WORLD!");

echo strncmp("Hello world!","Hello earth!",6); //The strncmp() function compares two strings.


$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo vfprintf($file,"There are %u million bicycles in %s.",array($number,$str));
//The vfprintf() function writes a formatted string to a specified output stream 

//Unlike fprintf(), the arguments in vfprintf(), are placed in an array. The array elements will be inserted at the percent (%) signs in the main string. This function works "step-by-step". At the first % sign, the first array element is inserted, at the second % sign, the second array element is inserted

$txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));
echo $txt;
// The vsprintf() function writes a formatted string to a variable.
// Unlike sprintf(), the arguments in vsprintf(), are placed in an array.


?>
