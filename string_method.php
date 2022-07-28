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
$text=strtolower($text);
print(ucfirst($text)); // makes first letter of string capital 
echo "\n";
print(ucwords($text," ")); // makes first letter of every word capital
echo "\n";
$text = "A very long woooooooooooord.";
$newtext = wordwrap($text, 8, "\n", true);  // word wrap wraps the string into the lines each line with given characters
echo "$newtext\n\n";
$newtext = wordwrap($text, 8, "\n", false);
echo "$newtext\n\n"; // this will not break the wooooooooooord even if it exceeds the wrap limit 

?>
