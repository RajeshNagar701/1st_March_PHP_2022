<?php
echo $name="Rajesh";
echo $name1="Mahesh";
echo $name2="Akash<br>";

//arr array is collections of values 
// arr print by print_r($arr)

$names=array("Rajesh","Mahesh","Akash","Nirav","Prem");
print_r($names);

echo $names[0];
echo $names[1];

// foreach only use for array 
echo "<hr>";

foreach($names as $value)
{
	echo $value."<br>";
}


?>