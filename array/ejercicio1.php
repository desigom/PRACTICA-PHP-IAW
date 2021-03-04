<?php
// Definimos una constante con el numero de elementos del array
define("num_elementos", 100);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i = 0; $i < num_elementos; $i++ ){
    $lista[$i] = rand(1, 30);
}

// Paso 3. Imprimir el array
for ($i = 0; $i < num_elementos; $i++ ) {
    echo $lista[$i];
    echo "<br>";
}

?>