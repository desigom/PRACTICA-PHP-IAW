<?php
// Mostrar numeros del 1 al 10 y del 10 al 1

echo "<h1>While Ascendente</h1>";

$i = 1;
while ($i <= 10) {
    echo $i;
    echo "<br>";
    $i++;
}

echo "<h1>While Descendente</h1>";

$i = 10;
while ($i >= 0) {
    echo $i;
    echo "<br>";
    $i--;
}


?>