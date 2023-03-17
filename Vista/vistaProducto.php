<?php include('cargariconos.php'); ?>
<?php require_once('../Controlador/validacionUsuario.php'); ?>


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
        <button onclick="abrirpestaña()" class="botonMenuProductos botonizquierda"> <i class="fa-solid fa-plus"></i> Subir un producto</button>
        <button  class="botonMenuProductos botonderecha"> <i class="fa-solid fa-magnifying-glass"></i> Buscar un producto</button>
    </div>
    <br>
    <div id="abrirMenu" style="display:none;" class="espacioSubirProducto" >
        <form action="../Controlador/subirProducto.php" method="POST">

            <input class="inputNombre" type="text"  placeholder="Nombre Del producto" name="nombreProducto">
            <input class="inputDescripcion" type="text" placeholder="Descripción del producto" name="descripcionProducto">
            <input class="inputfecha" type="date"  name="fechaProducto">
            <input class="botonCompletarSubida" type="submit" value="Subir producto">
        </form>
    </div>
    <div class="listadoProductos">

    
    <!-- Aqui va el bucle para ir mostrando los productos disponibles -->
    <?php $productos = listarProductos() ?>
    <?php if ($productos): ?>
        <?php foreach ( $productos as $producto ): ?>
        <?php echo "<p class='elementoProducto'><strong>Nombre: </strong>" . $producto['nombre'] . "<strong> Descripcion: </strong>" . $producto['descripcion'] . "<strong> Fecha: </strong>" . $producto['fecha'] . "  <a href='../Controlador/eliminarRegistro.php?id=" . $producto['id'] . "'> <i style='float: right' class='fa-solid fa-trash'></i></a></p> "; ?>
        <?php endforeach; ?>
        <?php  endif; ?>
    </div>
    
    <script src="js/abrirMenuSubirProducto.js"></script>
</body>
</html>