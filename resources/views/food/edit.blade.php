<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>this is edit form</h1>
 

	<form action='/food/{{$id}}/update' method="POST">
		@csrf
		<input type="text" value="{{$name}}" name="name">
		<input type="submit" value="submit">

	</form>

</body>
</html>