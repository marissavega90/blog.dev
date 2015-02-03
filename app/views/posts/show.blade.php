
@extends('layouts.master')



@section ('content')
<body>

<div class="container">
	<h2>Blog Entry #{{{ $post->id }}}</h2>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
</div>
	
</body>
</html>
@stop