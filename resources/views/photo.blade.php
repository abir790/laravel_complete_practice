<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>photo Gallery</h1>

			<?php foreach ($User as $value) {
		echo "Name is : ".$value['name'];
		//echo "Name is : ".$value->;  // 2 vabei possible
	} ?>

	<form action="/p" method="POST">
		@csrf
		<input type="text" name="name">
		<input type="submit" name="submit">
		
	</form>

	<?php 
	foreach ($data2 as $d2) {
		
	}
	
	 ?>


</body>
</html>

