<?php

/*
php is loosely type launguge  because php not declare datatype

int a=10

php variable declare with $ sign;

name rules

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character  
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )

$abc123          true
$123abc          false
$_abc            true
$123             fasle
$abc_abc         true
$abc abc         false

*/



$a=10;
$name="raj nagar";
$float=10.256354;
$char='Y';


echo "a value is ".$a."<br>";
echo "name is ".$name."<br>";
echo "float is ".$float."<br>";
echo "char is ".$char."<br>";



$x=10;
$y=20;
$sum=$x+$y;
echo "Sum of x & y is : ".$sum;

?>