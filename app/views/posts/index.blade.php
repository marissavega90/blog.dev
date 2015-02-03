<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<h1>Index</h1>
	@foreach($posts as $post)
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->body }}</p>
	<p id="entry">(entry #{{{ $post->id }}})</p>
	@endforeach

	{{ $posts->links() }}
</div>
	
</body>
</html>
