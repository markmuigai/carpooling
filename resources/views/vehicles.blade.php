<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<ul>


		@foreach  ($vehicles as $vehicle)
		
		<li>{{$vehicle->type}}</li>
		
		@endforeach


</ul>

</body>
</html>