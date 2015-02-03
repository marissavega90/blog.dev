@extends('layouts.master')




@section('content')
<body>
    
<div class="container">
    <div class="row">
    	<h3>Create a Post</h3>
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
        	@include ('posts.form')

        	{{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}

    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

@stop