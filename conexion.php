<?php

$mysql_host = 'localhost';
$mysql_usuario = 'root';
$mysql_clave = '';
$mysql_bd = 'clientes';

$conexion = mysqli_connect($mysql_host, $mysql_usuario, $mysql_clave, $mysql_bd);

if(mysqli_connect_errno()){
    echo "Error en la conexion: ".mysqli_connect_error();
}

?>
