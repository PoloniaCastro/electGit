<?
include_once 'conexion/conexion.php';

$correo = $_POST["txtCorreo"];
$contrasenia = $_POST["txtContrasenia"];

$consulta = "SELECT * FROM usuario where correo_usu = '$correo' and contrasenia_usu = '$contrasenia'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
if($fila = mysqli_fetch_array( $resultado ))
{
  session_start();
  $_SESSION['idUsuario'] = $fila['id_usu'];
  $_SESSION['nombreUsu'] = $fila['nombre_usu'];
  header("location: menu.php");
}
else
{
  echo "<script>
             alert('contraseña o correo incorrectos');
             window.location= 'login.php'
 </script>";
}
?>
