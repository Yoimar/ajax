<?php

require "conexion.php";
$resultado_bd = mysqli_query($conexion, "SELECT * FROM personas");
$usuarios_bd = "";

$usuarios_bd .= "<table>";
$usuarios_bd .= "<tr>";
$usuarios_bd .= "<th>#</th>";
$usuarios_bd .= "<th>Nombre</th>";
$usuarios_bd .= "<th>Correo</th>";
$usuarios_bd .= "</tr>";
$j=0;
while ($fila = mysqli_fetch_assoc($resultado_bd)) {
    $j+=1;
    $usuarios_bd .= "<tr>";
    $usuarios_bd .= "<td>".$j."</td>";
    $usuarios_bd .= "<td>".$fila['nombre']."</td>";
    $usuarios_bd .= "<td>".$fila['correo']."</td>";
    $usuarios_bd .= "</tr>";
}

$usuarios_bd .= "</table>";

echo $usuarios_bd;

mysqli_close($conexion);

?>
