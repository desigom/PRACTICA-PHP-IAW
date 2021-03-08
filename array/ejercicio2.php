<?php
// Definimos una constante con el numero de elementos del array
define("num_elementos", 10);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i = 0; $i < num_elementos; $i++ ){
    $lista[$i] = rand(1, 30);
}
$suma = 0;
// Paso 3. Imprimir el array
for ($i = 0; $i < num_elementos; $i++ ) {
    $suma = $suma + $lista[$i];
}

$media = $suma / num_elementos;

echo "La media es: ".$media;

?>