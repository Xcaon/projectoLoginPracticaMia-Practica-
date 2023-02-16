<?php include('cargariconos.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css" />
    <title>Document</title>
</head>
<body>
    <div class="menuSuperiorProductos">
        <button   class="botonMenuProductos botonizquierda"> <i class="fa-solid fa-plus"></i> Subir un producto</button>
        <button  class="botonMenuProductos botonderecha"> <i class="fa-solid fa-magnifying-glass"></i> Buscar un producto</button>
    </div>
    <br>
    <div class="espacioSubirProducto" >
        <form action="subirProducto.php" method="POST">

            <input class="inputNombre" type="text"  name="nombreProducto">
            <input class="inputDescripcion" type="text"  name="descripcionProducto">
            <input class="inputfecha" type="date"  name="fechaProducto">
            <input class="botonCompletarSubida" type="submit" value="Subir producto">
        </form>
    </div>

    <!-- Aqui va el bucle para ir mostrando los productos disponibles -->
    <?php  ?>
</body>
</html>