@extends ('layouts.master')


@section ('content')
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
	<article>
		<h1>Index</h1>
		@foreach($posts as $post)
			<h1>{{ $post->title }}</h1>

				<p>{{ $post->body }}</p>
				<p class="text-muted pull-right">Posted: {{{ $post->created_at->diffForHumans() }}}</p>
				<a href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
				
	</article>
@endforeach
		</div>
	</div>
</div>
<div class="container">
{{ $posts->links() }}
</div>
	
</body>
</html>
@stop