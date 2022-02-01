<h1><?= date('Y-m-d H:i:s'); ?></h1>
<?php
$num=5;
function myfunction() {
    $name="Deepak";
     echo "<hr> My name is $name";
     global $num;
     echo $num . "<br>";
}
myfunction();

function test() {
   static $a = 0;
    $a ++;
    return $a;
  }
  echo test() ."<br>";
  echo test() ."<br>";

  echo "The lenght of the string is " . strlen("I am learning php!") ."<br>";
  echo "The position is " .strpos("this world is amazing","amazing") ."<br>";
  echo md5("Deepak");

  $x=5;
  $y=10;
  echo "<br>$x + $y = " . $x+$y . "<br>";
  echo "$x - $y = " . $x-$y . "<br>";



  echo "Equal to == Operator <br>";
$x = 300;
$y = "300";
#var_dump -- Dumps information about a variable https://www.php.net/manual/en/function.var-dump.php
var_dump($x == $y);

$a = 150;
$b = "John";
# !== not identical
echo "<br>";
var_dump($a !== $b); #will return true even if $a and $b are equal but the data type are different

echo "<br>";
$d = false && false;
var_dump($d);
echo "<br>";
$a = true || false;
var_dump($a);
echo "<br>";
?>