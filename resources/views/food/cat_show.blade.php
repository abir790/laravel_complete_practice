{{$category->title}}
{{$category->food}}


@foreach($category->food as $fo)
{{$fo->name}}

@endforeach