


var botonInicio = document.getElementsByClassName('botonInicio');

var contenidoInterior = document.getElementsByClassName('interiorContent');




function pulsadoBotonInicio() {
    document.getElementById("interiorContent").innerHTML = '<object type="text/html" data="vistaInicio.html" style="width:100%;height:100vh;" ></object>';
}

function pulsadoBotonProducto(){
    document.getElementById("interiorContent").innerHTML = '<object type="text/html" data="vistaProducto.php" style="width:100%;height:100vh;" ></object>';
}