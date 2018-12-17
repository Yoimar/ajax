<?php

require "conexion.php";
//Recibimos las variables con POST
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
// Verificamos si las variables no estan vacias
if (empty($nombre) || empty($correo)) {
    echo "<span style='color:red';> Por favor ingrese su nombre y correo </span>";
} else {
    //Hacemos el insert a la tabla recordar que las columnas van solas sin corchetes ni comillas
    //Los valores si son texto llevan comillas simples
    $query = "INSERT INTO personas (nombre, correo) VALUES ('".$nombre."', '".$correo."')";
    $resultadoBD = mysqli_query($conexion, $query);
    echo "Gracias ".$nombre."<br /> Cualquier información sera enviada al correo: <br />". $correo;
}


mysqli_close($conexion);





?>
