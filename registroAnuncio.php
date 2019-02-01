<!doctype html>
<?php
include_once 'conexion/conexion.php';
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Electrico Desk |  Portal Template</title>
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
							<li><a href="index.html">Inicio</a></li>
							<li><a href="login.html"></a></li>
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

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<section class="inner-banner" style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
			<div class="container">
				<div class="caption">
					<h2>Deja tu anuncio</h2>
					<p>Busca Busca <span>Registro</span></p>
				</div>
			</div>
		</section>


		<section class="profile-detail">
			<div class="container">
				<div class="col-md-12">
					<div class="row">

              <section class="login-wrapper">
                <div class="container">
                  <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form class="form" method="POST" action="ejecutarRegistroAnuncio.php" >

                      <h2>Deja tu anuncio</h2>
                      <input type="txt" class="form-control input-lg"  name="txtTitulo" required  placeholder="Título"/>
                      <textarea name="txtDescripcion" class="form-control input-lg" rows="10" cols="40" placeholder="Escriba el detalle de su anuncio"></textarea>
                      <h2>Para contactarte</h2>
                      <input type="txt" class="form-control" name="txtNombre" required  placeholder="Nombre"/>
                      <input type="txt" class="form-control" name="txtDireccion" required  placeholder="Dirección"/>
                      <input type="mail" class="form-control" name="txtCorreo" required  placeholder="Correo ej: correo@algo.com"/>
                      <input  class="form-control" name="txtTelefono" required  placeholder="Teléfono Ej: 9 12345678"/>
                      <select class="form-control" name="selectReg">
                        <?
                          $consulta = "SELECT id_reg, nombre_reg FROM region";
                          $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                          while ($columna = mysqli_fetch_array( $resultado ))
                          {
                            echo '<option value="'.$columna['id_reg'].'">'.$columna['nombre_reg'].'</option>';

                          }

                        ?></select>

                        <select class="form-control" name="selectCiu">
                          <?
                            $consulta = "SELECT id_ciu, nombre_ciu FROM ciudad";
                            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                            while ($columna = mysqli_fetch_array( $resultado ))
                            {
                              echo '<option value="'.$columna['id_ciu'].'">'.$columna['nombre_ciu'].'</option>';

                            }

                          ?></select>


                      <button type="submit" class="btn btn-primary">Publicar</button>


                    </form>
                  </div>
                </div>
              </section>
							<ul class="social">
								<li><a href="" class="facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
								<li><a href="" class="google"><i class="fa fa-google-plus"></i>Google Plus</a></li>
								<li><a href="" class="twitter"><i class="fa fa-twitter"></i>Twitter</a></li>
								<li><a href="" class="linkedin"><i class="fa fa-linkedin"></i>Linked In</a></li>
								<li><a href="" class="instagram"><i class="fa fa-instagram"></i>Instagram</a></li>
							</ul>




						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- footer start -->
		<footer>

			<div class="copy-right">
			 <p>&copy;Copyright 2019 Grupo Macer</p>
			</div>
		</footer>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
