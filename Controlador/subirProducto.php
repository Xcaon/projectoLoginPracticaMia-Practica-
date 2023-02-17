
<?php 
require_once '../Modelo/conexionBd.php';
$db = crearBaseDeDatos();

$nombre = $_POST['nombreProducto'];
$descripcion = $_POST['descripcionProducto'];
$fecha = $_POST['fechaProducto'];

$nombreClean = mysqli_real_escape_string($db, $nombre);
$descripcionClean = mysqli_real_escape_string($db, $descripcion);
$fechaClean = mysqli_real_escape_string($db, $fecha);



if ($db){

    if ( mysqli_connect_error()){
        echo "Hubo un error con la conexion a la base de datos";
    } else {
        $consultaSQL = "INSERT INTO productos VALUES (NULL, '$nombreClean', '$descripcionClean', '$fechaClean');";
        $query = mysqli_query($db, $consultaSQL);

        if ( $query ){
            echo "Se ha creado correctamente";
        } else {
            echo "No se ha creado correctamente";
        }

    }

}

$db->close();

?>