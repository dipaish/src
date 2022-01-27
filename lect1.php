<?php
#comments : use # for single line comments
/* this is 
a multiple
line
comments
*/
#output a string
$myString = "Hello!";
echo $myString;
echo "<h5>I love using PHP!</h5>";

# echoing quotes
# on running the following code you get an error message
# echo "hello world this is "not" good ";
# To escape a quote use backslash "\"
echo "hello world this is \"good\"";

// OK because we escaped the quotes!
echo "<h5 class=\"specialH5\">I love using PHP!</h5>";

// OK because we used an apostrophe '
echo "<h5 class='specialH5'>I love using PHP!</h5>";

#variables
# a variable name starts with a $sign
# variable names are case sensitive
# on assigning text value to a variable, put quotes around the value
# you don't need to declare a variable
# variable name must start with a letter or underscore character
# variable name can use only alpha numeric characters and underscores

$my_string = "Hello World. My name is: ";
$my_number = 5;
$my_letter = "a";
$name = "Deepak";
echo $my_string;
echo $my_number;
echo $my_letter;
# you may use period sign as below
echo "<br>" . $my_string . "Deepak ";

#----------------------------------------------------------------------------------
/* Variable Scope
- 3 scopes
    - local
        - A variable that is declared inside a function has local scope.
        - It is accessible only within the function where it is created.
    - global
        - A variable that is declared outside a function has global scope
        - Global scope variables are accessible outside the function

    - static
        - Variables are deleted upon the execution or completion of function
        - Sometimes, you need the value of a local variable not to be deleted
        - to not delete the value of a local variable upone completion or execution, use static keyword

    - to access a global variable from within a function
        - you need to use the global keyword


*/
# Example global scope
$name = "John"; // global variable
// global variable is not accessible within a function 
function myfunction() {
    // echo "<hr> My name is $name";
}
// call the function, since it's a global variable, it is not accessible wihtin a function
myfunction();
    echo "<hr> My name is $name <hr>";
// use global keyword to access a global variable within a function
function fun1() {
    global $name;
    echo "<hr> My name is $name <hr>";
}
fun1();
#php constant 
# A constant is an identifier (name) for a simple value. 
/*
- The value cannot change  during the execution of the script
- Constants are global that is they are available across the entire script 
*/
# to create a constant, define() function is used
# syntax: define(name, value, case-insensitive)
# example 1 
define ("const1",80);
echo "Output of Constatnt: " . const1 . "<br>";
#example 2 
define("DAY", "We have started to learn PHP");
echo DAY;
# on running the following code you get a "Fatal Error" message
# echo day;

# HTML codes and php save the follwing code in a new php file 
/* 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "This is my first php page"; ?></title>
</head>
<body>
    <p>
    <h1>Hello Today is <?php echo date('l \t\h\e jS'); ?></h1>
    </p>
</body>
</html>
*/
?>