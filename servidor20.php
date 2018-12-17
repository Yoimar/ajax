<?php
require "conexion.php";

$personas = $_GET['personas'];

$nombre_id = "nombre_id";
$correo_id = "correo_id";
$actualizar = "actualizar";
$borrar = "borrar";

if ($personas === "personas") {
    $resultado = mysqli_query($conexion, "SELECT * FROM personas;");

    $table = "";
    $table .= '<table class = "table table-striped table-bordered">';
    $table .= '<tr>';
    $table .= '<th>#</th>';
    $table .= '<th>Nombre</th>';
    $table .= '<th>Correo</th>';
    $table .= '<th>Editar Usuario</th>';
    $table .= '<th>Borrar Usuario</th>';
    $table .= '</tr>';

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $table .= '<tr>';
        $table .= '<td>'.$fila['id'].'</td>';
        $table .= '<td id="'.$nombre_id.$fila['id'].'">'.$fila['nombre'].'</td>';
        $table .= '<td id="'.$correo_id.$fila['id'].'">'.$fila['correo'].'</td>';
        $table .= '<td><input type = "button" value = "Editar" class = "btn btn-default"></td>';
        $table .= '<td><input type = "button" value = "Borrar" class = "btn btn-danger"></td>';
        $table .= '<td><input type = "button" value = "Actualizar" class = "btn btn-primary" style="display: none;"></td>';
        $table .= '</tr>';
    }
}

$table .= '</table>';

echo $table;

mysqli_close($conexion);


?>
