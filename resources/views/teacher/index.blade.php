<!DOCTYPE html>
<html>
<head>
	<title>teachers</title>
</head>
<body>

	<h1>Theachers</h1>
	@foreach($teacher as $t)
	{{ $t->name }}<br>
	{{ $t->email }}<br>
	{{ $t->password }}




	@endforeach
	
		

	

</body>
</html>