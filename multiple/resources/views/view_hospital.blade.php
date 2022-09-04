<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <a  href="{{url('/add_hospital')}}"class="btn btn-primary">Add Hospital</a>	
  <h2>View Hopsital</h2>
  <table class="table">
	<tr>
		<th>Name</th>
		<th>Images</th>
	</tr>
	
	<?php
	foreach($data as $d)
	{
	?>
	<tr>
		<td>{{$d->name}}</td>
		<td>
		<?php
		$images_arr=explode(",",$d->files);
		foreach($images_arr as $image)
		{
		?>
			<img src="{{url('/upload/'.$image)}}">
		<?php
		}
		?></td>
	</tr>
	<?php
	}
	?>
	
  </table>
</div>

</body>
</html>
