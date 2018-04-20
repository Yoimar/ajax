<?php

$personas = array("Ana", "Alberto", "Jesus", "Emel", "Jesus", "Jose", "Yoimar", "Albert", "Yilmaris");

$nombre = $_GET["nombre"];


$sugerencia = "";


if ($nombre !== "") {
    $nombre = strtolower($nombre);
    $cantidaddecaracteres = strlen($nombre);

    foreach ($personas as $persona) {
        $nombreenservidor = substr($persona, 0, $cantidaddecaracteres);
        if (stristr($nombre, $nombreenservidor) !== false) {
            if ($sugerencia === "") {
                $sugerencia = $persona;
            } else {
                $sugerencia .= ", ".$persona;
            }
        }
    }
}
echo $sugerencia === "" ? "No fue encontrado" : $sugerencia;

?>
