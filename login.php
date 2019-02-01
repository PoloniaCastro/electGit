<!DOCTYPE html>
<?php
include_once 'conexion/conexion.php';
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Ingresa a tu cuenta</div>
            <div class="card-body">
              <div class="table-responsive">
                <!-- form -->
                <form class="form" method="POST" action=".php">
                  <table  style="margin: 0 auto;">
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                    <tr>
                      <td>correo</td>
                      <td><input type="mail" class="form-control" name="txtCorreo" required  placeholder="Correo"/></td>
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
                        <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                      </div></td>
                      <th></th>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
          </div>

        </div>
        <!-- /.container-fluid -->


  </body>

</html>
