<?php require_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title tag -->
    <title><?php the_title(); ?></title>

    <!-- styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Lato:400,700" rel="stylesheet">

    <!-- other tags -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- animation -->
  	<link rel="stylesheet" type="text/css" href="animate/style.css">
  	<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<link href="animate/css/animate.css" rel="stylesheet"/>
  	<link href="animate/css/waypoints.css" rel="stylesheet"/>
  	<script src="animate/js/jquery.waypoints.min.js" type="text/javascript"></script>
  	<script src="animate/js/waypoints.js" type="text/javascript"></script> -->

  </head>
  <body>

    <nav class="navbar navbar-default" id="primary-nav">
      <div class="container-fluid inner-nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-left" href="#"><img class="nav-logo"src="img/nav-logo2.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">E-load</a></li>
            <li><a href="#">Pay Bills</a></li>
            <li><a href="#">Fund Transfer</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right" id="right-nav">
            <li>
                <p class="navbar-btn">
                    <a href="#" data-toggle="modal" data-target="#login-overlay" class="btn btn-primary">Login</a>
                </p>
            </li>
            <!-- <li>
                <p class="navbar-btn">
                    <a href="#signup" data-toggle="modal" data-target="#login-overlay" class="btn btn-info">Sign Up</a>
                </p>
            </li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
