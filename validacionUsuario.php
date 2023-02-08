<?php

require_once 'conexionBd.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ( isset($usuario) && isset($password)){
    $usernameClean = mysqli_real_escape_string($db, $usuario);
    $passwordClean = mysqli_real_escape_string($db, $password);

        // Comprobar que exista la conexion
        if ($db){

            // Comprobamos que no haya salido con errores
            if (mysqli_connect_errno()){
                echo "<h3 style='padding: 5px; background-color: red;',color: black;'>La conexion no ha tenido exito</h3>";
                
            } 
            else 
            {
                echo "<h3 style='padding: 5px; background-color: green; color: white !important;'>La conexion ha tenido exito</h3>";
                comprobarusuario($usernameClean, $passwordClean, $db);
            }
        }
} else {
    echo "<h3> Los valores del usuario y contraseña no son validos</h3>";
}


function comprobarusuario($usernameClean, $passwordClean, $db){          
  
    // Creamos la consulta
    $consultaSql = "SELECT * from usuarios where nombre = '$usernameClean' AND password = '$passwordClean'";

    $query = mysqli_query($db, $consultaSql);

    if ( $query && mysqli_num_rows($query) >= 1){
        echo("Se ha encontrado el usuario");
        header('Location: inicio.php');
    } else {
        echo "<h3 style=' color: white; padding: 5px; background-color: red;',color: black;'>No se ha encontrado el usuario</h3>";
        header( "Refresh:5; url=login.php", true, 303);
    }

}




?>