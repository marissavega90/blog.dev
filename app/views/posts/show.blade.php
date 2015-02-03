
@extends('layouts.master')



@section ('content')
<body>

<div class="container">
	<h2>Blog Entry #{{{ $post->id }}}</h2>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
	<p class="greyOut">Created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
	<p class="greyOut">Updated on: {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
	<a class="btn btn-primary" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
</div>
	
</body>
</html>
@stop