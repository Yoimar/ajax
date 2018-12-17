<?php

require "conexion.php";

$nombre = $_GET['nombre'];

if (!empty($nombre)) {

$persona = mysqli_real_escape_string($conexion, $nombre);

$resultado_bd = mysqli_query($conexion, "SELECT * FROM personas WHERE nombre LIKE '%".$persona."%';");


while ($fila = mysqli_fetch_assoc($resultado_bd)) {
    echo "<div class='clase'>".$fila['nombre']."</div>";
}

mysqli_close($conexion);


}


?>
