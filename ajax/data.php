<?php
$con=new mysqli("localhost","root","","ecar");
$sql="select * from customers";
$res=$con->query($sql);
while($fetch=$res->fetch_object())
{
	$arr[]=$fetch;		
}

foreach($arr as $c)
{
	echo $c->id . "<br>";
	echo $c->name . "<br>";
	echo $c->username . "<br>";
	echo $c->gen . "<br><br><br>";
}


?>
 