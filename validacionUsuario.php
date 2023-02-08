<?php

require_once 'conexionBd.php';

// Comprobar que exista la conexion
if ($db){

    // Comprobamos que no haya salido con errores
if (mysqli_connect_errno()){
    echo "<h3 style='background-color: red;',color: black;'>La conexion no ha tenido exito</h3>";
    comprobarusuario();
} else {
    echo "<h3 style='background-color: green;',color: white;'>La conexion ha tenido exito</h3>";
}



 


}

function comprobarusuario($usuario, $password){

    $usernameClean = mysqli_real_escape_string($usuario);
    $passwordClean = mysqli_real_escape_string($password);

    // Creamos la consulta
    $consultaSql = "SELECT * from usuarios where nombre = '$usernameClean' AND password = '$passwordClean'";

    $query = mysqli_query($db, $consultaSql);

}





?>