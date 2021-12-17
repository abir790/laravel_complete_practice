<!DOCTYPE html>
<html>
<head>
	<title>teacher create</title>
</head>
<body>
	<div class="container container-fluid">




		@foreach($errors->all() as $erro)
		{{ $erro }}

		@endforeach


		<form action="/teacher" method="POST">
			@csrf
			Name: <input type="text" value="{{old('name')}}" name="name"><br>
			email: <input type="email" name="email"><br>
			password<input type="text" name="password">
			<input type="submit" value="submit" name="submit">




			

		</form>
				
	</div>

</body>
</html>