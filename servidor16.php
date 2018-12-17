<?php
require "conexion.php";

if (isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}else{
    $nombre="";
}


//Funcion para dividir en caso de que sean dos usuarios
if (empty($nombre)) {
    mostrar_usuarios();
}else{
    buscar_usuario($nombre);
}

//Funcion para Mostrar los usuarios al cargar la pagina
function mostrar_usuarios(){
    //Requiero la Conexion dentro de Cada Funcion
    require "conexion.php";

    //Mostrar todos los usuarios
    $resultado = mysqli_query($conexion, "SELECT * FROM personas;");
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='clase'>".$fila['nombre']. " </div>";
        echo '<input type="hidden" value="'.$fila['correo'].'">';
    }

    mysqli_close($conexion);
}

//Funcion para Mostrar el resultado de la busqueda, en base al input tipo texto
function buscar_usuario($nombre){
    //Requiero la conexion dentro de cada funcion
    require "conexion.php";

    //Mostrar resultados en base a un filtro
    $persona = mysqli_real_escape_string($conexion, $nombre);
    $resultado = mysqli_query($conexion, "SELECT * FROM personas WHERE nombre LIKE '%".$persona."%';");

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='clase'>".$fila['nombre']. " </div>";
        echo '<input type="hidden" value="'.$fila['correo'].'">';
    }

    mysqli_close($conexion);
}

?>
