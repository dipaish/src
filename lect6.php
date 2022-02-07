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
function add1($name, $address){ // double parameters $name & $ address
    echo "$name lives in  $address <br>";
}
add1("Juha", "Tornio");
add1("Timo", "Helsinki");

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
?>

