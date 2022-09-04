<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

	

</head>
<body>

<div class="container mt-3">
  <h2>Multiple form</h2>
  
  @if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
		<ul>
		  @foreach ($errors->all() as $error)
			  <li>{{ $error }}</li>
		  @endforeach
		</ul>
	</div>
 @endif
  
	@if(session('success'))
	<div class="alert alert-success">
	  {{ session('success') }}
	</div> 
	@endif
  
  <form action="{{url('/add_hospital')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="mb-3 mt-3">
      <label for="email">Hospital Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Hospital Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Hospital Files:</label>
      <input type="file" class="form-control" name="files[]" multiple />
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>





<div class="container mt-3">
  <h2>Ajax form</h2>
  
 
  <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
 @csrf
    <div class="mb-3 mt-3">
      <label for="email">Country Name:</label>
	  
      <select class="form-control" name="cid" id="cid">
		<option>---- Select Countryt ------</option>
		@foreach($countrie as $c)
		<option value="{{$c->id}}">
			{{$c->cnm}}
		</option>
		@endforeach
	  </select>
	  
    </div>
    <div class="mb-3 mt-3">
      <label for="email">State Name:</label>
      <select class="form-control" name="sid"  id="sid">
	  </select>
    </div>
	
	<div class="mb-3 mt-3">
      <label for="email">City Name:</label>
      <select class="form-control" name="city_id"  id="city_id">
	  </select>
    </div>
	
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>	


<script>
$('#cid').on('change', function () {
                var cid = this.value;
                $('#sid').html('');
                $.ajax({
				url:"{{url('/getStates')}}",
				type: "POST",
				data: {
				cid: cid,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#sid').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $('#sid').append('<option value="' + value.id + '">' + value.snm + '</option>');
                        });
                        
                    }
                });
            });
			
$('#sid').on('change', function () {
                var sid = this.value;
                $('#city_id').html('');
                $.ajax({
				url:"{{url('/getCity')}}",
				type: "POST",
				data: {
				sid: sid,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#city_id').html('<option value="">Select City</option>');
                        $.each(result.cities, function (key, value) {
                            $('#city_id').append('<option value="' + value.id + '">' + value.city_name + '</option>');
                        });
                        
                    }
                });
            });			
</script>

</body>
</html>
