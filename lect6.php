<?php 
/* Functions
    - PHP has thousands of ready made built in functions
        - phpinfo() 
    - Can also create our own functions
    - A function needs to be called for its execution
    - Function can be called anywhere within a program
    - Function name should reflect what the function does (recommended)
 Syntax: 
    function functionName() {
		Code of lines of code
	}
 Rules: 
    - Function names are not case-sensitive
    - Function name can start with a letter or underscore sign but not a number

*/
echo "<h2> Simple PHP Function </h2>";
// creating a function called test
function test() {
    echo "this is my first function <br>";
}
// calling function 
test(); // calling function
Test(); // also calls function - non case sensitive
TEST(); // also calls function - non case sensitive

/* Function with arguments
    - Arguments are written in parentheses after the function name.
    - Any number of arguments can be added.
    - Arguments are separated with a comma  (,)
*/
echo "<h2> Example: Function with arguments  </h2>";
function add($name){ // single parameter $name
    echo "$name <br>";
}
add("Juha");
add("Timo");
function add1($name="name1", $address="Helsinki"){ // double parameters $name & $ address
    echo "$name lives in  $address <br>";
}
add1("Juha", "Tornio");
add1("Timo", "Helsinki");
add1();

/* Default argument value
    - Using a default parameter allows function to take the default value as argument
*/
echo "<h2> Example: Default Argument Value </h2>";
function min_age($minage = 18){
    echo "Minimum age for voting is $minage <br>";
}
min_age();
min_age(19);
min_age(25);

/* Returning a value
 - Return statement is used to return a value from a function
*/
echo "<h2> Example 1 : Returning a value </h2>";
function addnums($x, $y){
    $sum = $x + $y;
    return $sum . "<br>";
}
echo "1 + 16 = " . addnums(1,16);
echo "123 + 1634 = " . addnums(123,1634);

echo "<h2> Example 2 : Returning a value </h2>";
function names($n1,$n2,$n3){
    $n1 = ucfirst(strtolower($n1)); //converts first letter to uppercase and rest to lowercase
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return $n1 . "<br> " . $n2 . "<br> " . $n3 . "<br>";
}
echo names("DeepaK", "JUHA", "pekka");

/*
# Include & require in PHP 
    - To use external functions or libraries
    - Functions or libraries saves in external files can be pulled by using include & require
    - Include
        - To fetch a particular file & load all its contents
Example: 
include 'filename.php';

# Include_once
 - Everytime on issuing include directive will include the requested file again
  even if the file is already inserted.
  - Let’s assue that library.php is already included in your file. 
        Another library library1.php also needs to be included in your files and 
        library1.php includes library.php. Therefore, on including
        library1.php will produce error message 
        as this will define the same constant or function multiple times.
        To avoid this kind of situation, include_once is used. 
- Best to stick with include_once rather than include statement
Example: 
include_once 'filename.php';

# Require & Require_Once
    - Include or include_once attemts to inclde the requested file. The executuion of prgram 
        continues even if the file is not found.
    - When it is must to include  a file, require or require_once should be used
    - Like include_once better to stick with require_once
Example: 
require_once 'filename.php';
*/
?>

