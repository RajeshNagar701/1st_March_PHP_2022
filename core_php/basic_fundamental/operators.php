<?php
/* 
operators


Arithmetic operators    = - * / %  moduler / reminder / sesh after divistion 
Assignment operators    =     += -= *= /=  %= 
Comparison operators    == === > < >= <= !=
Increment/Decrement operators    ++    --
Logical operators   &&     ||     !
String operators    .    .=
Conditional assignment operators   (cond)?'if':'else';
Array operators 

*/
// Arithmetic + - * / %

/*

$a=101;
$b=20;
$sum=$a%$b;  
echo $sum;
*/

//increement & decrimrent 

/*

$a=5;
$a++;
echo "increement value of a++ :".$a."<br>";

$b=10;
$b--;
echo "decreement value is a-- :".$b; 

*/

//logical operators &&  ||   !

/*
$a=5;
$b=10;
$c=2;

if($a>$b || $a>$c)   // if(!($a>$b))
{
	echo "condition true";
}
else
{
	echo "Not Condition true";
}

*/

// comparision operators   == === > < >= <= !=

/*
$a=100;
$b="100";

if($a>=$b) // check value equl to 
{
	echo "true";
}
else
{
	echo "False";
}
*/

/*
$a=100;
$b="100";

if($a===$b) // check data type  & equel to
{
	echo "true";
}
else
{
	echo "False";
}

*/

//Assignment Operators / Shorthand operators  =     += -= *= /=  %= 

//$a+=$b   means $a=$a+$b;

/*

$y = 20;
$x=10;  
$x+=$y;     // $x=$x+$y

echo $x;

*/

//String Operators   .   .=
/*

echo "Hello" . "Ho w are you" ."<br>";

echo $name="Raj"  .  "Nagar <br>";

$employee="Nirav";

$employee.=" Nagar";

$employee.=" Prakashbhai";

echo $employee;

*/

// conditional operators / turnory 

/*
$age=18;

if($age>18)
{
	echo "Man";
}
else
{
	echo "Child";
}
*/

// turnory operator conditional   (cond)? "yes" : "No"

$age=18;
$ans=($age>18)? "Man" : "Child";  // codition ? "if":"else";
echo $ans;



?>