<?php

$json=file_get_contents('http://localhost/students/1st_March_PHP_2022/Webservices/webservices_form.php');

$arr=json_decode($json,true); // json econvert to arr

//print_r($arr);
?>

<table border="2" width="80%" align="center">
	<tr>
		<td>ID</td>
		<td>name</td>
		<td>usernamesss</td>
		
	</tr>
	<?php
	foreach($arr as $d)
		{
		?>	
	<tr>
		<td><?php echo $d['id'];?></td>
		<td><?php echo $d['name'];?></td>
		<td><?php echo $d['username'];?></td>
	</tr>
		<?php
		}
?>
	
</table>





