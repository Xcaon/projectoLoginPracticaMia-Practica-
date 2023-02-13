<?php

require_once '../Modelo/conexionBd.php';


function validar($usuario, $password){

$db = crearBaseDeDatos();

/* Variables si existen o no
$usuario = $_POST['usuario'];
$password = $_POST['password'];
*/

// Validacion de variables
if ( isset($usuario) && isset($password)){
    $usernameClean = mysqli_real_escape_string($db, $usuario);
    $passwordClean = mysqli_real_escape_string($db, $password);

        // Comprobar que exista la conexion
        if ($db){

            // Comprobamos que no haya salido con errores
            if (mysqli_connect_errno()){
                        echo "<h3 style='padding: 5px; background-color: red;',color: black;'>Error conexion de base de datos</h3>";
            } 
            else 
            {
                echo "<h3 style='padding: 5px; background-color: green; color: white !important;'>La conexion ha tenido exito</h3>";
                 // Creamos la consulta
                 $consultaSql = "SELECT * from usuarios where nombre = '$usernameClean' AND password = '$passwordClean'";

                 $query = mysqli_query($db, $consultaSql);

                 if ( $query && mysqli_num_rows($query) >= 1){
                     echo("Se ha encontrado el usuario");
                     header('Location: ../Vista/inicio.html');
                     
                 } else {
                     echo "<h3 style=' color: white; padding: 5px; background-color: red;',color: black;'>No se ha encontrado el usuario</h3>";
                     return 2;
                 }
            }
        }
} else {
    echo "<h3> Los valores del usuario y contraseña no son validos</h3>";
    return 1;
}


 }




?>