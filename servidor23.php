<?php
require "conexion.php";

if (isset($_GET['personas'])){
    $personas = $_GET['personas'];
}else{
    $personas="";
}

if (isset($_GET['usuario_id_actualizado'])){
    $usuario_id_actualizado = $_GET['usuario_id_actualizado'];
}else{
    $usuario_id_actualizado="";
}

if (isset($_GET['nombre_actualizado'])){
    $nombre_actualizado = $_GET['nombre_actualizado'];
}else{
    $nombre_actualizado="";
}

if (isset($_GET['usuario_id_eliminado'])){
    $usuario_id_eliminado = $_GET['usuario_id_eliminado'];
}else{
    $usuario_id_eliminado="";
}

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
        $table .= '<td ><input id="'.$fila['id'].'" onclick = "editar_usuario(this.id)" type = "button" value = "Editar" class = "btn btn-default"></td>';
        $table .= '<td ><input id="'.$borrar.$fila['id'].'" onclick="borrar_usuario('.$fila['id'].')" type = "button" value = "Borrar" class = "btn btn-danger"></td>';
        $table .= '<td ><input id="'.$actualizar.$fila['id'].'" onclick="actualizar_usuario('.$fila['id'].')" type = "button" value = "Actualizar" class = "btn btn-primary" style="display: none;"></td>';
        $table .= '</tr>';
    }

    $table .= '</table>';
    echo $table;

    mysqli_close($conexion);
}



if (!empty($usuario_id_actualizado)&&!empty($nombre_actualizado)){
    $cliente = mysqli_real_escape_string($conexion, $nombre_actualizado);
    $query = "UPDATE personas SET nombre = '$cliente' WHERE id = $usuario_id_actualizado;";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
}

if (!empty($usuario_id_eliminado)) {
    $query = "DELETE FROM personas WHERE id = $usuario_id_eliminado;";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
}



?>
