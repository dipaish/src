<?php
#control flow in php 
#if statement 
#Syntax
/* if statement 
if (condition or variable to test)
    {
        //code here
    }
*/

# Example 1 
echo "<h3>Example: if statement </h3>";
$a = 1;
if ($a == 1){
    echo "the condition is true <br>"; 
}

# if .. else statement 
/* Syntax
if (condition) {
    codes
}
else {
    codes
}
*/
# if-else statement example
echo "<h3>Example: if else </h3>";
$d = date("D");
if ($d == "Fri"){
    echo "have a nice weekend! <br>";
    echo "***************************";
}
else {
    echo "Have a nice working day <br>";
}

#IF ELESEIF STATEMENT
/* 
Combination of if and else
This statement is used when we have several conditions and 
one has to be selected among those.

Syntax:
if (condition)
code to be executed if condition is true;

elseif (condition)
code to be executed if condition is true;

else
code to be executed if condition is false;
*/

# if elseif -example
echo "<h3>Example: if elseif </h3>";
$d = date("D");
if ($d == "Fri"){
    echo "have a nice weekend! <br>";
    echo "*************************** <br>";
}
elseif ($d == "Sun"){
    echo "have a nice sunday<br>";
}
elseif ($d == "Mon"){
    echo "Wish you a nice week ahead<br>";
}
else {
    echo "Have a nice working day <br>";
}

#----------------------------------------------------------------
# SWITCH STATEMENT
/* 
- Useful when one variable or the result of an expression can have multiple values 
that triggers a different function.
- To breakout of the switch statement, once a condition has been fulfilled, 
use the break command. On using break, it prevents the code from running
 into the next case automatically

Syntax:
switch (n)
    {
case label1:
    code to be executed if n=label1;
    break;
case label2:
    code to be executed if n=label2;
    break;
default:
    code to be executed if n is different from both label1 and label2;
}
*/
# Example 
echo "<h3>Example: Switch statement</h3>";
$x = 1;
switch ($x) {
    case 1:
        echo "Number 1";
        echo "<br>";
        break;
    case 2:
        echo "Number 2";
        echo "<br>";
        break;
    case 3:
        echo "Number 3";
        echo "<br>";
        break;
    default:
            echo "No Number between 1 & 3";
            echo "<br>";
            break;
}

# check the impact of break command by removing break from the above example
# ----------------------------------------------------------------------------------------------
# PHP Loops 
# WHILE LOOP
/* 
- executes a block of code while a condition is true.
Syntax:

while (condition)
{
code to be executed;
}
*/
# Example 
echo "<h3>Example: While Loop</h3>";
$i=1;
while($i<=5)
{
echo "The number is " . $i . "<br />";
$i++;
}

# DO..WHILE STATEMENT
/* 
- execute the block of code once
- it will then check the condition, and repeats the loop while the condition is true.
Syntax
    do
    {
    code to be executed;
    }
    while (condition)
*/
echo "<h3>Example: Do.. While</h3>";
$i=1;
do {
    $i++;
    echo "The number is $i <br>";
}
while ($i<=5);

# FOR LOOP
/*
- It is used when you know in advance how many times the script should run.
Syntax

for (init; condition; increment)
    {
        code to be executed;
    }
*/
echo "<h3>Example: For loop</h3>";
for ($x=0; $x<=5; $x++)
{
echo "The number is : $x <br />";
}

#FOREACH LOOP
/* 
- It is used to loop through arrays
Syntax

foreach ($array as $value)
    {
        code to be executed;
    }    
*/
echo "<h3>Example: Foreach loop</h3>";
$x=array(1,2,3);
foreach ($x as $value) {
    echo $value . "<br>";
}
/* Read More:
- https://www.php.net/manual/en/control-structures.for.php
- https://www.w3schools.com/php/php_looping.asp 
- https://www.w3schools.com/php/php_if_else.asp
- https://www.w3schools.com/php/php_switch.asp 
*/
?>