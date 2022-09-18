<?php




// it usein allways in android and iphone for
// retrive data from server & database in $arr[] and than output convert in array array("uid"=>"8") to json_encode [{"uid":"8","unm":"vihaana"}]
// than call this page on call_webserveses.php and convert in encode to decode 

	$conn=new Mysqli('localhost','root','','ecar');

	$sel="select * from customers";
	$res=$conn->query($sel);
	
	while($r=$res->fetch_object())
		{
			$arr[]=$r;                                      
		}
		
	//print_r($arr);
/*
	foreach($arr as $data)
	{
	?>
		<p><?php echo $data->username?></p>
	<?php
	}
	*/
	
	// json_encode function convert data arr to json_format
	
	//array["id"=>"1","name"=>"Rajesh"];  to json  [{"id":"6","name":"rajesh"}]
	echo $json_data=json_encode($arr);  // 
	//echo "<br><br><br><br>";
	
	
	// json_decode function convert data json_format to arr 
	$decode_arr=json_decode($json_data,true);  // con
	//print_r($decode_arr);	
	
?>                                     