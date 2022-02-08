<?php 
//file handling 
//1. file_exists()function: to check if file exists
echo "<h2>Checking if file exists or not</h2>";
if (file_exists("lect2/aboutus1.php")){
    echo "file exisits";
}
else 
    echo "file not found";
    echo "<hr><h2>Creating a file </h2>";
    //2. Creating a file 
    // Step 1: Use fopen function to open a file
    // Step 2: Use functions like: fwrite to write, fread or fgets to read
    // Step 3: Close the file
    $newfile = fopen('file.txt','a') or die ("Failed to create a file");
    $txt = "Hello world this is interesting and is a new line";
    fwrite($newfile, $txt);
    fclose($newfile);

    echo "<hr><h2>Creating a file </h2>";
    echo "<hr><h2>Reading from a file </h2>";
    //3. Reading from a file - fread()
    // https://www.php.net/manual/en/function.fread.php

    $fname = "lect1.php";
    $handle = fopen($fname, "r");
    $cont = fread($handle, filesize($fname));
    echo $cont;
    fclose($handle);

    // example fread 
 echo "<hr><h2> To read the defined number of characters from the file</h2>";
 $f1 = "lect1.php";
 $h1 = fopen($f1, "r");
 $cont1 = fread($h1,20);
 fclose($h1);
 echo $cont1; 
?>