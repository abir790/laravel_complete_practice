<!DOCTYPE html>
<html>
<head>
	<title>Protected Page</title>
</head>
<body>
	<h1>This is protected Pages</h1>
	

	  @if(session()->has('ok'))
  <h1 class="alert alert-success"> {{session()->get('ok')}}</h1>

  @endif



</body>
</html>