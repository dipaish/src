<?php 
$title = "String functions & Operators";
$md = "Operators in php";
include 'lect2/header.php'; ?>
<h2>Some string functions</h2>
<?php
#php string functions: https://www.php.net/manual/en/ref.strings.php 
#strlen function: returns the length of a string
 echo "The lenght of the string is " . strlen("I am learning php!") ."<br>";

#strpos: returns the character position of the first match. 
# If no match found if will return FALSE.
echo "The position is " .strpos("this world is amazing","amazing") ."<br>";
echo "<h2>Arithmetic Operators </h2>";
#Operators
$x=100;
$y=60;
echo "The sum of x and y is : ". ($x+$y) ."<br />";
echo "The difference between x and y is : ". ($x-$y) ."<br />";
echo "Multiplication of x and y : ". ($x*$y) ."<br />";
echo "Division of x and y : ". ($x/$y) ."<br />";
echo "Modulus of x and y : " . ($x%$y) ."<br />";

echo "<h2>Comparison Operators </h2>";
# Equal to == Operator
echo "Equal to == Operator <br>";
$x = 300;
$y = "300";
#var_dump -- Dumps information about a variable https://www.php.net/manual/en/function.var-dump.php
var_dump($x == $y);
echo "<hr>Not equal to (!=) / (<>)<br>";
# Not equal to (!=) / (<>)
var_dump($x != $y);
echo "<hr>  Not identical (!==) operator <br>";
$a = 150;
$b = "150";
var_dump($x !== $y); #will return true even if $a and $b are equal but the data type are different
echo "<hr>  Greater than(>) operator <br>";
$x = 400;
$y = 200;
var_dump($x>$y);
echo "<h2>Logical Operators </h2>";
$a = true && false;
var_dump($a); 
echo "<br>";
$b = false && true;
var_dump($b); 
echo "<br>";
$c = true && true;
var_dump($c);
echo "<br>";
$d = false && false;
var_dump($d);
echo "<br>";
$a = true || false;
var_dump($a);
echo "<br>";
$b = false || true;
var_dump($b);
echo "<br>";
$c = true || true;
var_dump($c);
echo "<br>";
$d = false || false;
var_dump($d);
echo "<br>";
?>
  <?php include 'lect2/footer.php'; ?>