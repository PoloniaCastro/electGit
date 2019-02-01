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
							<li><a href="login.html"></a></li>r
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
					<h2>Consigue tus trabajos</h2>
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
                    <form class="form" method="POST" action="ejecutarRegistroUsuario.php" >
                      <img class="img-responsive" alt="logo" src="img/logo.png">
                      <h2>Regístrate</h2>
                      <input type="txt" class="form-control input-lg"  name="txtNombre" required  placeholder="Nombre"/>
                      <input type="mail" class="form-control input-lg"  name="txtCorreo" placeholder="Correo">
                      <input type="password" class="form-control input-lg" name="txtContrasenia" placeholder="Contraseña">
                      <label><a href="">¿Olvidaste tu contraseña?</a></label>
                      <button type="submit" class="btn btn-primary">Ingresar</button>
                      <p>No tienes una cuenta <a href="">Regístrate</a></p>

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
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-user fa-fw"></i> About Me
								</div>
													<!-- /.panel-heading -->
								<div class="panel-body">
								<p>The front end is the part that users see and interact with, includes the User Interface, the animations, and usually a bunch of logic to talk to the backend. It is the visual bit that the user interacts with. This includes the design, images, colours, buttons, forms, typography, animations and content. It’s basically everything that you as a user of the website can see.</p>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-leaf fa-fw"></i> Responsibilities:
								</div>
													<!-- /.panel-heading -->
								<div class="panel-body">
								<p>The front end is the part that users see and interact with, includes the User Interface, the animations, and usually a bunch of logic to talk to the backend. It is the visual bit that the user interacts with.</p>
								<ul>
									<li>Software testing in a Web Applications/Mobile environment.</li>
									<li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
									<li>Software testing in a Web Applications environment.</li>
									<li>Translate designs into responsive web interfaces</li>
									<li>Software testing in a Web Applications/Mobile environment.</li>
									<li>Software testing in a Web Applications environment.</li>
									<li>Translate designs into responsive web interfaces</li>
									<li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
									<li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
									<li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
								</ul>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-cog fa-fw"></i> Skills
								</div>
													<!-- /.panel-heading -->
								<div class="panel-body">
								<p>The front end is the part that users see and interact with, includes the User Interface, the animations, and usually a bunch of logic to talk to the backend.</p>
								<span class="service-tag">Web Design</span>
								<span class="service-tag">Graphics</span>
								<span class="service-tag">Development</span>
								<span class="service-tag">App design</span>
								<span class="service-tag">IOS Apps</span>
								<span class="service-tag">CMS Development</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- footer start -->
		<footer>
			<div class="container">
				<div class="col-md-3 col-sm-6">
					<h4>Featured Job</h4>
					<ul>
						<li><a href="#">Browse Jobs</a></li>
						<li><a href="#">Premium MBA Jobs</a></li>
						<li><a href="#">Access Database</a></li>
						<li><a href="#">Manage Responses</a></li>
						<li><a href="#">Report a Problem</a></li>
						<li><a href="#">Mobile Site</a></li>
						<li><a href="#">Jobs by Skill</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-6">
					<h4>Latest Job</h4>
					<ul>
						<li><a href="#">Browse Jobs</a></li>
						<li><a href="#">Premium MBA Jobs</a></li>
						<li><a href="#">Access Database</a></li>
						<li><a href="#">Manage Responses</a></li>
						<li><a href="#">Report a Problem</a></li>
						<li><a href="#">Mobile Site</a></li>
						<li><a href="#">Jobs by Skill</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-6">
					<h4>Reach Us</h4>
					<address>
					<ul>
					<li>1201, Murakeu Market, QUCH07<br>
					United Kingdon</li>
					<li>Email: Support@job.com</li>
					<li>Call: 044 123 458 65879</li>
					<li>Skype: job@skype</li>
					<li>FAX: 123 456 85</li>
					</ul>
					</address>
				</div>

				<div class="col-md-3 col-sm-6">
					<h4>Drop A Mail</h4>
					<form>
						<input type="text" class="form-control input-lg" placeholder="Your Name">
						<input type="text" class="form-control input-lg" placeholder="Email...">
						<textarea class="form-control" placeholder="Message"></textarea>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>


			</div>
			<div class="copy-right">
			 <p>&copy;Copyright 2018 Jober Desk | Design By <a href="https://themezhub.com/">ThemezHub</a></p>
			</div>
		</footer>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
<form class="form" method="POST" action="ejecutarRegistroUsuario.php">
  <table  style="margin: 0 auto;">
    <tr>
<td>&nbsp;</td>

    </tr>
    <tr>
      <td>Nombre</td>
      <td><input type="txt" class="form-control" name="txtNombre" required  placeholder="Nombre"/></td>
    <td>&nbsp;</td>
    </tr>
    <tr>
<td>&nbsp;</td>

    </tr>
    <tr>
      <td>Apellido</td>
      <td><input type="txt" class="form-control" name="txtApellido" required  placeholder="Apellido"/></td>
    <td>&nbsp;</td>
    </tr>
    <tr>
<td>&nbsp;</td>

    </tr>
    <tr>
      <td>Dirección</td>
      <td><input type="txt" class="form-control" name="txtDireccion" required  placeholder="Dirección"/></td>
    <td>&nbsp;</td>
    </tr>
    <tr>
<td>&nbsp;</td>

    </tr>
    <tr>
      <td>Correo</td>
      <td><input type="mail" class="form-control" name="txtCorreo" required  placeholder="Ej: correo@algo.com"/></td>
    <td>&nbsp;</td>
    </tr>
    <tr>
<td>&nbsp;</td>

    </tr>
    <tr>
      <td>Teléfono</td>
      <td><input type="txt" class="form-control" name="txtTelefono" required  placeholder="Ej: 9 12345678"/></td>
    <td>&nbsp;</td>
    </tr>
    <tr>
<td>&nbsp;</td>
    </tr>
    <tr>
    <td>Región</td>
    <td><select name="selectReg">
      <?
        $consulta = "SELECT id_reg, nombre_reg FROM region";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($columna = mysqli_fetch_array( $resultado ))
        {
          echo '<option value="'.$columna['id_reg'].'">'.$columna['nombre_reg'].'</option>';

        }

      ?>
    </td>
  <td>&nbsp;</td>
  </tr>
  <tr>
<td>&nbsp;</td>

  </tr>
  <tr>
  <td>Ciudad</td>
  <td><select name="selectCiu">
    <?
      $consulta = "SELECT id_ciu, nombre_ciu FROM ciudad";
      $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
      while ($columna = mysqli_fetch_array( $resultado ))
      {
        echo '<option value="'.$columna['id_ciu'].'">'.$columna['nombre_ciu'].'</option>';

      }

    ?>
  </td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>

</tr>
    <tr>
      <td>Contraseña</td>
      <td><input type="password" class="form-control" name="txtContrasenia" required  placeholder="Contraseña"/></td>
    <td>&nbsp;</td>
    </tr>
    <tr>
<td>&nbsp;</td>

    </tr>




  <tr>
<td>&nbsp;</td>

  </tr>






    <tr>
<td>&nbsp;</td>

    </tr>
    <tr>
      <td></td>
      <td><div>
        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
      </div></td>
      <th></th>
    </tr>
  </table>
</form>
