<?php

// include vs require
// include si la funcion no existe continua ejecutando el codigo
// require exige que exista el archivo
include "funciones.php";
// Aquí estoy haciendo uso de la funcion "saludo"
saludo();

echo "<br>";

saludo_usuario("Desi");

echo "<br>";

$salida = saludo_usuario_con_salida("Desi");
echo $salida;

?>