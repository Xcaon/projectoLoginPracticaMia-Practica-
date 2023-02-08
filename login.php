
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css" />
    <title>Document</title>
</head>
<body>

<div class="padre">
    <div class="contenedorLogin">
        <img class="logo" src="http://127.0.0.1/projectoNotasMio/projectoLoginPracticaMia/imagenes/imagen.png" width="100" height="100">
        <h1>Iniciar Sesión</h1>
        <form action="validacionusuario.php" method="POST">
            <label class="labelLogin" aria-placeholder="Introduce tu nombre de usuario.." for="usuario">Usuario</label>
            <input class="inputsEntrada" type="text" name="usuario">
            <label class="labelLogin" for="password">Contraseña</label>
            <input class="inputsEntrada" type="password" name="password">

            <input class="login" type="submit" value="Login">
        </form>
    </div>
</div>
    
    
</body>
</html>