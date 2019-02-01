<!doctype html>
<?php
include_once 'conexion/conexion.php';
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Electrico Desk | Responsive Job Portal Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Plugin Css -->
<link rel="stylesheet" href="css/plugins.css">

<!-- Style & Common Css -->
<link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
  <!-- Navigation Start  -->
  <nav class="navbar navbar-default navbar-sticky bootsnav">

    <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
            <li><a href="">Inicio</a></li>
            <li><a href="registroUsuario.php">Registro</a></li>
            <li><a href="companies.html">Companies</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse</a>
              <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                <li class="active"><a href="browse-job.html">Browse Jobs</a></li>
                <li><a href="company-detail.html">Job Detail</a></li>
                <li><a href="resume.html">Resume Detail</a></li>
              </ul>
            </li>
          </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  <!-- Navigation End  -->

  <!-- login section start -->
  <section class="login-wrapper">
    <div class="container">
      <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
        <form class="form" method="POST" action="ejecutarLogin.php" >
          <img class="img-responsive" alt="logo" src="img/logo.png">
          <input type="mail" class="form-control input-lg"  name="txtCorreo" placeholder="Correo">
          <input type="password" class="form-control input-lg" name="txtContrasenia" placeholder="Contraseña">
          <label><a href="">¿Olvidaste tu contraseña?</a></label>
          <button type="submit" class="btn btn-primary">Ingresar</button>
          <p>No tienes una cuenta <a href="registroUsuario.php">Regístrate</a></p>
        </form>
      </div>
    </div>
  </section>
  <!-- login section End -->

  <!-- footer start -->
  <footer>

    <div class="copy-right">
     <p>&copy;Copyright 2019 Grupo Macer </p>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script src="js/bootsnav.js"></script>
  <script src="js/main.js"></script>
  </body>

</html>
