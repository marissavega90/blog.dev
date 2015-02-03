
@extends('layouts.master')



@section ('content')
<body>

<div class="container">
	<h2>Blog Entry #{{{ $post->id }}}</h2>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
	<p class="text-muted pull-right">Updated: {{{ $post->updated_at->diffForHumans() }}}</p>
	<a class="btn btn-primary" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
</div>
	
</body>
</html>
@stop