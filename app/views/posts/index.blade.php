@extends ('layouts.master')


@section ('content')
<body>
<div class="container">
	<article>
		<h1>Index</h1>
		@foreach($posts as $post)
			<h1>{{ $post->title }}</h1>

				<p>{{ $post->body }}</p>
				<p class="greyOut">Created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
				<a href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
				
	</article>
@endforeach


</div>
<div class="container">
{{ $posts->links() }}
</div>
	
</body>
</html>
@stop