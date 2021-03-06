@extends('layouts.master')




@section('content')
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        	<h3>Create a Post</h3>
            {{ Form::open(array('action' => 'PostsController@store')) }}
            	@include ('posts.form')

            	{{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

@stop