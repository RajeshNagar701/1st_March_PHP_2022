<h1>
	Hello i am blade file
</h1>

<?php
echo "<h1>Hello</h1>";
?>

<h1>{{'Hello'}}</h1>
<hr>
<?php
$name="Rajesh";
echo $name
?>
<hr>
{{$name="Rajesh"}}

@php
$name="Nagar";
echo $name;
@endphp

<hr>
<h1>{{10+10}}</h1>
<hr>

@php $name="nagar" @endphp

@if($name=="Raj")
<h1>Hi my name is {{$name}}</h1>
@elseif($name=="Mahesh")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif


<hr>
@php
$name="nagar";
echo ($name=="nagarraj") ? $name : 'Wrong condition';
@endphp

<hr>

@for($i=1;$i<=10;$i++)
<h4>{{$i}}</h4>	
@endfor


<hr>

@php $users=['sam','raj','mahesh'] @endphp

@foreach($users as $d)
<h4>{{$d}}</h4>
@endforeach
