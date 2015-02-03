<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Entry</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h2>Blog Entry #{{{ $post->id }}}</h2>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
</div>
	
</body>
</html>