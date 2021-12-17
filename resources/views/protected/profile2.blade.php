<!DOCTYPE html>
<html>
<head>
	<title>Protected pro 2 Page</title>
</head>
<body>
	<h1>This is protected pro 2 Pages</h1>
	

	  @if(session()->has('ok2'))
  <h1 class="alert alert-success"> {{session()->get('ok2')}}</h1>

  @endif



</body>
</html>