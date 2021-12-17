<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action='/food' method="POST">
		@csrf
		<input type="text" name="name">
		<input type="submit" value="submit">

	</form>

</body>
</html>