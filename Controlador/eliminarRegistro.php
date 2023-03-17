<?php 

require_once '../Modelo/conexionBd.php';

$valorID = $_GET['id'];

$db = crearBaseDeDatos();

if (isset($valorID)){
$idClean = mysqli_real_escape_string($db, $valorID);

if ($db){

    if ( mysqli_connect_error()){
        echo "Hubo un error con la conexion a la base de datos";
    } else {
        $consultaSQL = "DELETE FROM productos where id = '$idClean'";
        $query = mysqli_query($db, $consultaSQL);

        if ( $query ){
            header('Location: http://127.0.0.1//projectoLoginPracticaMia/Vista/inicio.html');
        } else {
            echo "No se ha podido eliminar";
        }

    }

}

$db->close();
} else {
    echo "El elemento no existe";
}

?>