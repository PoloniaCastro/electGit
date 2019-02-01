<?
include_once 'conexion/conexion.php';

$titulo = $_POST["txtTitulo"];
$descripcion = $_POST["txtDescripcion"];
$nombreAnun = $_POST["txtNombre"];
$direccionAnun = $_POST["txtDireccion"];
$correoAnun = $_POST["txtCorreo"];
$telefonoAnun = $_POST["txtTelefono"];
$ciudadAnun = $_POST["selectCiu"];
$regionAnun = $_POST["selectReg"];

$consulta1 = "INSERT INTO anuncio(titulo_anun, descripcion_anun, direccion_anun, telefono_anun, nombre_clien_anun, correo_anun, id_ciu)
VALUES ('".$titulo."', '".$descripcion."', '".$direccionAnun."', '".$telefonoAnun."', '".$nombreAnun."', '".$correoAnun."', '".$ciudadAnun."')";
$resultado = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la 2º consulta a la base de datos");
if($resultado)
  {
    echo "<script>
         alert('Anuncio publicado');
         window.location= 'index.php'
         </script>";

  }
?>
