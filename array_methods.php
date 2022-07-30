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
echo "\n";
print_r($result);
echo "\n";
$result=array_intersect($a1,$a2);// This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
print_r($result);
echo "\n";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result = array_intersect_assoc($a1,$a2); //This function compares the keys and values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

print_r($result);
echo "\n";

$result = array_intersect_key($a1,$a2);//This function compares the keys of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
print_r($result);
echo "\n";

$result = array_intersect_ukey($a1,$a2,"myfunction");//The array_intersect_ukey() function compares the keys of two (or more) arrays, and returns the matches.
print_r($result);
echo "\n";

if(array_key_exists("a",$a1)){
  echo "key exists"."\n";
}
else{
  echo "key not there"."\n";
}

print_r(array_keys($a1));  //The array_keys() function returns an array containing the keys.
echo "\n";


function myfunction12($v)
{
  return($v+$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction12",$a));   //The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
echo "\n";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));  //The array_merge() function merges one or more arrays into one array.
//If two or more array elements have the same key, the last one overrides the others.
echo "\n";

print_r(array_merge_recursive($a1,$a2));   //The difference between this function and the array_merge() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.
echo "\n"; 

$a1=array("Dog","Dog","Cat");
$a2=array("Pluto","Fido","Missy");
array_multisort($a1,$a2);   //The array_multisort() function returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.

//String keys will be maintained, but numeric keys will be re-indexed, starting at 0 and increase by 1.

print_r($a1);
print_r($a2);

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");//This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
$result=array_diff_assoc($a1,$a2);
print_r($result);
echo "\n";
$result= array_diff_key($a1,$a2);//The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.
print_r($result);
echo "\n";

function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
echo "\n";

$result= array_diff_ukey($a1,$a2,"myfunction");
print_r($result);
echo "\n";

$a1=array_fill(3,4,"blue"); //Fills an array with values
print_r($a1);
echo "\n";


$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");  //The array_fill_keys() function fills an array with values, specifying keys.
print_r($a1);



function test_odd($var)
  {
  if($var%2==0)
  return($var);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd")); //This function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.
echo "\n";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);  // convert keys into values and values into keys
print_r($result);

$a=array("red","green");
print_r(array_pad($a,5,"blue"));   //The array_pad() function inserts a specified number of elements, with a specified value, to an array.

$a=array("red","green");
print_r(array_pad($a,-5,"blue"));//If you assign a negative size parameter, the function will insert new elements BEFORE the original elements


array_pop($arr);  // it removes the element from the last index
print_r($arr);

echo array_product($arr)."\n";  //The array_product() function calculates and returns the product of an array.


array_push($arr,"dkfjs","dfdsf");// it adds the given elements at the last index of array
print_r($arr);

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);//The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
echo $a[$random_keys[0]]."\n";
echo $a[$random_keys[1]]."\n";
echo $a[$random_keys[2]]."\n";

function myfunction123($v1,$v2)
{
  return $v1 . "-" . $v2;
  }
  $a=array("Dog","Cat","Horse");
  print(array_reduce($a,"myfunction123")+"\n");  //The array_reduce() function sends the values in an array to a user-defined function, and returns a string.

  $a1=array("red","green");
  $a2=array("blue","yellow");
  print_r(array_replace($a1,$a2));  //The array_replace() function replaces the values of the first array with the values from following arrays.

  $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
  $a2=array("a"=>array("yellow"),"b"=>array("black"));
  print_r(array_replace_recursive($a1,$a2));  //The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively.


$new_arr=array_reverse($arr); // reverses the given array
print_r($new_arr);
echo "\n";
print(array_search("dfdsf",$new_arr)); // The array_search() function search an array for a value/element and returns the key/index.
echo "\n";

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);  //The array_shift() function removes the first element from an array, and returns the value of the removed element.

//If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 

print_r ($a);
echo "\n";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));//The array_slice() function returns selected parts of an array.
echo"\n";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);  //The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.
print_r($a1);

$a=array(5,15,25);
echo array_sum($a); // returns the sum of the values in the array

function uintersect($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_uintersect($a1,$a2,"uintersect");
print_r($result);//The array_uintersect() function compares the values of two or more arrays, and returns the matches.
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

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));//The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");//The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.
print_r($a);

function myfunction1234($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_udiff($a1,$a2,"myfunction1234");
print_r($result);


var_dump(in_array("hel",$arr)); // return the boolean value true if present and false if absent 
echo "\n";

$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);//This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));//The array_values() function returns an array containing all the values of an array.

function walk($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");//The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.



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