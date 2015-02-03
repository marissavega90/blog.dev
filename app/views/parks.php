<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require_once ('./db_connect.php');

// Use $_GET to create pages 1-3, with some math stuff
// var_dump($_GET['page']);
$nextprev = $dbc->query("SELECT COUNT(*) FROM national_parks")->fetchColumn();

if(!isset($_GET['page'])) {
	$page = 1;
} else {
	$page = $_GET['page'];
};

$offset = ($page-1) * 4;

$query = $dbc->prepare("SELECT name, location, date_established, area_in_acres, description
				FROM national_parks ORDER BY name LIMIT 4 OFFSET :offset");

$query->bindValue(':offset', $offset, PDO::PARAM_INT);

$query->execute();

$parks = $query->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_POST)) {
	if 
		(
			(empty($_POST['name'])) || 
			(empty($_POST['location'])) ||
			(empty($_POST['date_established'])) ||
			(empty($_POST['area_in_acres'])) ||
			(empty($_POST['description'])) 
		) 
	{
	    	$errorMsg = 'Must fill out form completely!';

		} else {

		$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
			VALUES (:name, :location, :date_established, :area_in_acres, :description)";
			// VALUES (:email, :name)');
		$stmt = $dbc->prepare($query);

		$stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
	    $stmt->bindValue(':location',  $_POST['location'],  PDO::PARAM_STR);
	    $stmt->bindValue(':date_established',  $_POST['date_established'],  PDO::PARAM_STR);
	    $stmt->bindValue(':area_in_acres',  $_POST['area_in_acres'],  PDO::PARAM_STR);
	    $stmt->bindValue(':description',  $_POST['description'],  PDO::PARAM_STR);

	    $stmt->execute();

		}
}



?>

<html>
<head>
	<title>National Parks</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/natl_parks_bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    	body { 

    		padding-top: 10px; 
    		background-image: url(img/nationalparksbackground2.jpg);
    		background-size: 110%;
    		background-repeat: no-repeat;
    		background-attachment: fixed;
    		padding-bottom: 60px;

    	}

    	.table tbody td {

    		background-color: #eee;
    	}

    	.panel {

    		background-color: rgba(125, 125, 125, 0.2);
    	}

    	.table th {
    		color: #1F2229;
    	}

    	h6 {

    		color: #F3F3F3;

    	}

    	.pager {

    		color: black;
    	}

    	h1 {

    		color: #1F2229;
    	}
    	
    	input {

    		color: #DDDDDD;
    	}

    	.form-control::-webkit-input-placeholder { 

    		color: #DDDDDD; 
    	}
    	
    	.form-control::-webkit-input {

    		color: white;
    	}

    	input, textarea{

		    color: #FFF;
		}

    </style>

</head>
	<body>
		<div class="container">
			<h1 align="center">National Parks</h1>
			<h6 align="center">"The mountains are calling and I must go."
				<p><em>-John Muir</em></p></h6>
			<br>
		</div>

		<div class="container">
			<div class="panel panel-default">
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Date Established</th>
						<th>Area (in Acres)</th>
						<th>Description</th>
					</tr>

						<? foreach ($parks as $key => $park): ?>

							<tr>
								<? foreach ($park as $value): ?>

									<td> <?= $value; ?> </td>
					
								<? endforeach; ?>

							</tr>

						<? endforeach; ?>
				</table>
			</div>

						<nav>
						  <ul class="pager">

 							<? if ($page > 1 ): ?>
 							
							    <li class="previous"><a href="?page=<?= $page-1 ?>"><span aria-hidden="true">&larr;</span> Previous</a></li>

							<? endif; ?>

							<? if ($page <= $nextprev/4): ?>

						    	<li class="next"><a href="?page=<?= $page+1 ?>">Next <span aria-hidden="true">&rarr;</span></a></li>

							<? endif; ?>

						  </ul>
						</nav>
							
							   

							    
					</div>
				</div>
		</div>
<!-- TABLE END! -->

<!-- FORM BEGIN! -->

<div class="container">
	<div class="row">
		<div class="col-md-offset-1">
			<div class="form-group">

				<form name="additem" id="" method="POST" action="national_parks.php">
					<div class="col-md-5">	 
						<input type="text" class="form-control" id="name" name="name" placeholder="Name of Park">
					</div>

					<div class="col-md-5">
					<input type="text" class="form-control" id="location" name="location" placeholder="Location of Park">
					</div>

					<div class="col-md-3">
					<input type="text" class="form-control" id="date_established" name="date_established" placeholder="Established in YYYY-MM-DD">
					</div>

					<div class="col-md-4">
					<input type="text" class="form-control" id="area_in_acres" name="area_in_acres" placeholder="Area in Acres (no commas)">
					</div>

					<div class="col-md-10">
					<input type="text" class="form-control" id="description" name="description" placeholder="Please include a brief description of the park">
					</div>

					<div class="col-md-8">
					<button type="submit" class="btn btn-default2" id="addNew">Submit</button>
					</div>
						 
				</form>
			</div>
		</div>
		
	</div>
</div>

<!-- FORM END! -->

	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
