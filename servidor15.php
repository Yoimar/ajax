<?php

require "conexion.php";

$resultado = mysqli_query($conexion, "SELECT * FROM personas;");

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<div class='clase'>".$fila['nombre']. " </div>";
    echo '<input type="hidden" value="'.$fila['correo'].'">';
}

mysqli_close($conexion);

?>
