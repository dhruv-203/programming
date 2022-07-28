<?php
$arr= array(1,2,3,4,5,6,4,5); // array function is used to create an array
$age=array("Dhruv"=>"35","Ayush"=>"37","Bk"=>"43");

print_r(array_change_key_case($age,CASE_LOWER));
print_r(array_change_key_case($age,CASE_UPPER));
$age=array("Dhruv"=>"35","Ayush"=>"37","BK"=>"43","bk"=>"98");
print_r(array_change_key_case($age,CASE_UPPER));  // in this case the latest will be updated 


print_r(array_chunk($arr,2)); // it splits the array elements into smaller chunks of new arrays of given length


$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  $last_names = array_column($a, 'last_name'); // it returns the tuples(values) from the given attribute(column/key) name of array
  print_r($last_names);


  $names=array("dhruv","ayush","bk");
  $ages=array(19,20,19);
  print_r(array_combine($names,$ages)); //The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
 // Note: Both arrays must have equal number of elements!


 print_r(array_count_values($names)); // returns the no of values of the array 
echo "\n";

$pudding=array('raspberry'=>333,'peach'=>222);
$icecream=array('pecan'=>111,'chocolate'=>999);
print_r($pudding);
print_r($icecream);
$dessert=$pudding+$icecream;  // joints two arrays
print_r($dessert);
// == same elements; === same element in the same order
if($pudding==$icecream){
  echo "same\n";
  
  }
else{
  echo "Difference\n";
}


$cars = array("Volvo","BMW", "Toyota","merc");
$text = implode(",",$cars); // imoplode array to string  
echo $text."\n";
$automobile=explode(",",$text);  // explode string to array
print_r($automobile);



list($a,$b)=$automobile;  // assings the first two values of array to a and b (not neccessary that a and b are equal)
echo $a."\n";   //the list() function is used to assign values to a list of variables in one operation.
echo $b."\n";


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
$result=array_diff($a1,$a2,$a3); // This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
print_r($result);
$result=array_intersect($a1,$a2);// This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
print_r($result);



$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");//This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
$result=array_diff_assoc($a1,$a2);
print_r($result);




function test_odd($var)
  {
  if($var%2==0)
  return($var);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd")); //This function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.



array_pop($arr);  // it removes the element from the last index
print_r($arr);

echo array_product($arr)."\n";  //The array_product() function calculates and returns the product of an array.


array_push($arr,"dkfjs","dfdsf");// it adds the given elements at the last index of array
print_r($arr);


$new_arr=array_reverse($arr); // reverses the given array
print_r($new_arr);
echo "\n";
print(array_search("dfdsf",$new_arr)); // The array_search() function search an array for a value/element and returns the key/index.
echo "\n";
$arr=array(1,5,4,7,8,2,1,3,6,4,8,9,2,2,1,8,6);
asort($arr); // the ascending order of the array
print_r($arr);
echo "\n";
arsort($arr); // the descending order of the array
print_r($arr);  // numbers in square brackets are the indexes at the element is present
echo "\n";
echo "\n";

echo "i am here come and get me:    ";
print(count($arr));//returns the number of elements
echo "\n";


var_dump(in_array("hel",$arr)); // return the boolean value true if present and false if absent 
echo "\n";

$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);//This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.



// usort array
/*
PARAMETERS: 
The input array.

callback
The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
*/

function my_sort($a,$b){
    return $a<=>$b;  // spaceship operator returns 1 if a is greater than b else -1 and 0 on equal
}
usort($arr,'my_sort');  // ascending sorting
print_r($arr);
?>