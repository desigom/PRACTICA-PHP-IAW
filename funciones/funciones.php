<?php

function imprimir_tabla_multiplicar($numero){
    echo "<table border=1>";
    for ($i = 0; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo"<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function calcular_media() {
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
}

function calcular_maximo() {

// Definimos una constante con el numero de elementos del array
define("num_elementos", 10);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i = 0; $i < num_elementos; $i++){
    $lista[$i] = rand(1, 30);
}

// Paso 3. Imprimir el array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}
$maximo = max($lista);

echo "El valor máximo es : $maximo";
}

function calcular_minimo() {

// Definimos una constante con el numero de elementos del array
define("num_elementos", 10);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i = 0; $i < num_elementos; $i++){
    $lista[$i] = rand(1, 30);
}

// Paso 3. Imprimir el array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

$minimo = min($lista);

echo "El valor minimo es : $minimo";
}


// Definición de la funcion "saludo"
function saludo() {
    echo "Hola mundo!";
}

// Entrada: $nombre
// Salida: -
function saludo_usuario ($nombre){
    echo "Hola $nombre!";
}

// Entrada: $nombre
// Salida: Una cadena de texto
function saludo_usuario_con_salida($nombre){
    return "Hola $nombre!"; 
}

?>