<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
	<h1>List view</h1>


	@foreach($food as $fod)
	{{$fod->name}}

	@endforeach
	<center><div class="col-lg-6 col-lg-offset-6">
	<a href="" class="btn btn-info">Add New</a>
	<h1>Food List</h1>
<ul class="list-group">
	@foreach($food as $fod)
  <li class="list-group-item col-lg-8">
    {{$fod->name}}
  </li>
</ul>
<ul class="list-group col-lg-4">
  <li class="list-group-item col-lg-4">
  	<a href="food/{{$fod->id}}/show">Show</a>
    <a href="food/{{$fod->id}}/edit">Edit</a>
    <a href="food/{{$fod->id}}/delete" style="background-color: red;">Delete</a>

  </li>
  @endforeach

</ul>

</div></center>
	
</body>
</html>