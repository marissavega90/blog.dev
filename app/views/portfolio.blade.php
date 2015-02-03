@extends('layouts.master')



@section('content') 
    <body>
   
<div class="container">
    <div class="row">
        <h1>My Portfolio</h1>
        <ul>
            <li>Thing 1</li>
            <li>Thing 2</li>
            <li>Thing 3</li>
        </ul>
        <a class="btn btn-default" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
@stop
  