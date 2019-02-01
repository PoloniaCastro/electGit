<?
include_once 'conexion/conexion.php';

$nombreUsu =  $_POST["txtNombre"];
$apellidoUsu = $_POST["txtApellido"];
$direccionUsu = $_POST["txtDireccion"];
$correoUsu = $_POST["txtCorreo"];
$telefonoUsu = $_POST["txtTelefono"];
$contrasenia = $_POST["txtContrasenia"];
$pass = sha1($contrasenia);
$ciudadUsu = $_POST["selectCiu"];
$regionUsu = $_POST["selectReg"];

$consultaSelect = "SELECT * FROM usuario where correo_usu = '$correoUsu'";
$resultado = mysqli_query( $conexion, $consultaSelect ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$fila = mysqli_fetch_array($resultado);
$scan = $fila[0];
if($scan ==0)
{
  $consultaInsert = "INSERT INTO usuario (nombre_usu, apellido_usu, direccion, correo_usu, telefono_usu, contrasenia_usu)
  VALUES ('".$nombreUsu."', '".$apellidoUsu."', '".$direccionUsu."', '".$correoUsu."', '".$telefonoUsu."', '".$pass."')";
  $resultado = mysqli_query( $conexion, $consultaInsert ) or die ( "Algo ha ido mal en la 2º consulta a la base de datos");

  $consulta2 = "SELECT id_usu FROM usuario order by id_usu desc limit 0,1";
  $resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la  3º consulta a la base de datos");
  while ($columna = mysqli_fetch_array( $resultado2 ))
  {
    $consulta3 = "INSERT INTO usuario_ciudad(id_usu, id_ciu) VALUES('".$columna['id_usu']."', '".$ciudadUsu."')";
    $resultado3 = mysqli_query( $conexion, $consulta3 ) or die ( "Algo ha ido mal en la 4º consulta a la base de datos");
    if($resultado3)
      {
        echo "<script>
           alert('Registro exitoso);
           window.location= 'menu.php'
          </script>";

      }
  }//fin while
}//fin if
else
{
  echo "<script>
       alert('Correo ya existe');
       window.location= 'registroUsuario.php'
       </script>";
}

?>
