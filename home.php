<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <li>
                <p class="navbar-btn">
                    <a href="#" data-toggle="modal" data-target="#login-overlay" class="btn btn-info">Sign Up</a>
                </p>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="jumbotron jumbotron-fluid"  id="jmain">
      <div class="container">
        <h1></h1>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="jsection1">
      <div class="container">
        <h1 class="display-4"></h1>
        <span class="fa-stack fa-lg float-right mright70">
          <i class="fa fa-car fa-3x"></i>
          <i class="fa fa-car fa-3x"></i>
          <i class="fa fa-car fa-3x"></i>
        </span>
      </div>
    </div>

    <div class="jumbotron" id="jsection2">
      <div class="container">
        <h1 class="display-4"></h1>
        <span class="fa-stack fa-lg float-left mleft50">
          <i class="fa fa-car fa-3x"></i>
          <i class="fa fa-car fa-3x"></i>
          <i class="fa fa-car fa-3x"></i>
        </span>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="jsection3">
      <div class="container">
        <h1 class="display-4"></h1>
        <span class="fa-stack fa-lg float-right mright70">
          <i class="fa fa-car fa-3x"></i>
          <i class="fa fa-car fa-3x"></i>
          <i class="fa fa-car fa-3x"></i>
        </span>
      </div>
    </div>


<!-- MODAL INCLUDE -->
  <?php
    include 'includes/modal.php';
  ?>

  </body>
</html>
