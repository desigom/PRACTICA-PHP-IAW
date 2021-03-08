<?php
// Definimos una constante con el numero de elementos del array
define("num_elementos", 10);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i = 0; $i < num_elementos; $i++){
    $lista[$i] = rand(1, 30);
}

echo "<h1>Array Desordenado</h1>";

// Paso 3. Imprimir el array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

// Paso 4. Ordenamos el array de manor a mayor
sort($lista);

echo "<h1>Array Ordenado de menor a mayor</h1>";

// Paso 5. Imprimir el array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

// Paso 6. Ordenamos el array de mayor a manor
rsort($lista);

echo "<h1>Array Ordenado de meyor a manor</h1>";

// Paso 7. Imprimir el array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}


?>