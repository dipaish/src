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
echo $my_string;
echo $my_number;
echo $my_letter;
# you may use period sign as below
echo "<br>" . $my_string . "Deepak ";

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
echo const1;
#example 2 
define("DAY", "We have started to learn PHP");
echo DAY;
# on running the following code you get a "Fatal Error" message
# echo day;
?>