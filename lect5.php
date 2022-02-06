<?php
// What is an array? 
/*
- A data structure that consists of a collection of elements (values/variables) that are
identified by an array index or key.
- Array stores multiple values in a single variable.
- PHP Arrays 
- Syntax To create
    array();
- To access values 
    $variable_name[n]; // n: index number
*/

echo "<h1> Example of an array</h1>";
//creating an array
$course = array("PHP", "JavaScript", "Databases");
// accessing the value of an array
echo "Courses this period are: " . $course[0] . ", " . $course[1] . " and " . $course[2];
// php arrays can have multipe data types 
echo "<h2>PHP arrays can have multiple data types </h2>";
$var1 = array("PHP", 5, true);
foreach ($var1 as $x) {
    echo "The datatype of $x is: " . "<b>". gettype($x) ."</b><br>";
}
// Types of PHP Arrays: 3 Types : Indexed, Associate & Multidimensional Array
/* 
Indexed Arrays
    - Stores array element with a numeric index
    - Index automatically assigned
        $course=array("php", "JavaScript", "Databases");
        echo $course[0] . $course[1]; 
    - Index manually assigned
        $course[0] = ”php”;
        $course[1] = ”Databases”;
        $course[2] = ”javascript”;
    - Looping through an indexed array
        - count() to return the length of an array (number of elements of an array) 
            $ courses = array(”PHP”, ”JavaScript”);
            echo count($courses); //will return 2

*/
echo "<h2> Example of an indexed Array </h2>";
$course=array("php", "JavaScript", "Databases");
echo $course[0] ." ". $course[1]; 
echo "<h2> Looping through an indexed Array </h2>";
$city = array('Kajaani', 'Oulu', 'Helsinki', 'Kemi', 'Tornio');
$num = count($city);
for ($i=0; $i < $num; $i++) {
    echo "$i) $city[$i] <br>";
}

# Associative Arrays 
/*
 - Associative arrays helps to reference items in an array by name rather than by number
 - Creating an associative array 
    Syntax 1: 
    $varname = array ("Keyname" = "value","Keyname1" = "value1" ) 

    Syntax 2: 
    $varname['keyname'] = "value";
    $varname['keyname1'] = "value";
- Retrieving the value of an associative array
    $varname['Keyname']
Note: 
=> Double arrow operator is used to assign values for a key in an array, 
for example BMW key above is assigned 35000 &  Mazda 20000 that is the something on the left side will have a corresponding value on the right side 
- > Single arrow operator (object operator) is used to access methods and properties
 of an object that is something on the right of the operator is a member 
 of the object on the left side of the operator

*/

echo "<h2> Example of an associative array with for eachloop </h2>";
$car = array("BMW"=>50000, "Tesla"=>60000,"Mazda"=>45000);
foreach($car as $x => $price) {
    echo " $x costs $price <br>";
//try to put this record in a table
}

# Multi Dimensional arrays (Arrays of arrays)
/*
- Arrays with more than one dimenstion 
- Each element in the main array can also be an array
- Each element in the sub array can also be an array & so on 
*/

echo "<h2> Example of a Multidimensional array </h2>";
$products = array (
    'laptops' =>array(
        'Acer' => "Acer 1234",
        'HP' => "HP 2020 Series",
        'Sony' => "Sony 2020"),
    'mobiles' =>array(
        'Samsung' => "S12 galaxy", 
        'Apple' => "Iphone 10",
        'Nokia' => 'Nokia 9899')
    );
    foreach ($products as $type => $items){
    foreach ($items as $key => $value)
    echo "$type: \t $key \t $value <br>";
    }
# Array Functions
/*
Numerous functions available for handling arrays
- Is_array
- Count
- Sort
- Shuffle 
Full list of array function : http://php.net/manual/en/ref.array.php  
*/
# Some examples 
/* IS_ARRAY 
- is_array function can check whether a variable is an arrays
- Not possible to have same string variable and array that is you can not 
have string variable named $address and also an array called $address
*/
echo "<h2> Example of IS_ARRAY function </h2>";
$address = "Kajaani";
echo (is_array($address)) ? "Is an array" : "is not an array <br>"; 
$name = array("John", "Pekka", "Smith");
echo (is_array($name)) ? " Is an array" : " is not an array <br>"; 
/* SORT 
A built in function and very common in PHP
Simplest form 
sort($address);
Sort functions
sort() –  sort arrays >> ascending order
rsort() – sort arrays  >>descending order
asort() -  sort associative arrays >> ascending order >> based on value
ksort() – sort associative arrays >>ascending order >> based on key
arsort() – sort associative arrays >> descending order >> based on value
Krsort() - sort associative arrays >> descending order >> based on key
*/
echo "<h2> Example: Sorting in asceding numerical order </h2>";
$nums = array(5,8,3,4,2,9,23,2,18,93,65);
sort($nums);
$snums = count($nums);
for ($i=0; $i<$snums; $i++){
    echo $nums[$i]. "<br>";
}
echo "<h2> Example: Sorting in asceding alphabetical order </h2>";
$name = array("John", "Pekka", "Smith");
sort($name);
$len=count($name);
for ($i=0; $i<$len; $i++){
    echo $name[$i]. "<br>";
}

# get to pptx file go through other examples 
?>