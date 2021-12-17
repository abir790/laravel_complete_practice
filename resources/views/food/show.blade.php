<!DOCTYPE html>
<html>
<head>
	<title>Single Data Show</title>
</head>
<body>@if($food)
	<h1>Details of {{$food->name}}</h1>
	{{$food->location}}
	{{$food->categories_id}}

	{{$food->category->title}}
	@elseif($category)
	{{$category->title}}
	@endif

	


<h1>wellcome to Show Page</h1>

	

</body>
</html>