<?php
// Definimos una constante con el numero de elementos del array
define("num_elementos", 100);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
$i = 0;
do {
    $lista[$i] = rand(1, 30);
    $i++;
} while ($i < num_elementos);

$suma = 0;
// Paso 3. Imprimir el array
$i = 0;
do  {
    echo $suma = $suma + $lista[$i];
    $i++;
    echo "<br>";
} while ($i < num_elementos);

// Calcular media
$media = $suma / num_elementos;
echo "La media es: ".$media;
echo "<br>";


// Calcular maximo
$maximo = max($lista);
echo "El valor máximo es : $maximo";
echo "<br>";

// Calcular minimo
$minimo = min($lista);
echo "El valor minimo es : $minimo";


?>