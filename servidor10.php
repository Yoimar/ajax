<?php

require "conexion.php";
$resultado_bd = mysqli_query($conexion, "SELECT * FROM personas");
$usuarios_bd = "";

$usuarios_bd .= "<table>";
$usuarios_bd .= "<tr>";
$usuarios_bd .= "<th>Nombre</th>";
$usuarios_bd .= "<th>Correo</th>";
$usuarios_bd .= "</tr>";

while ($fila = mysqli_fetch_assoc($resultado_bd)) {
    $usuarios_bd .= "<tr>";
    $usuarios_bd .= "<td>".$fila['nombre']."</td>";
    $usuarios_bd .= "<td>".$fila['correo']."</td>";
    $usuarios_bd .= "</tr>";
}

$usuarios_bd .= "</table>";

echo $usuarios_bd;

mysqli_close($conexion);

?>
