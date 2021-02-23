<?php
// Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen con los valores obtenidos en cada uno de los dados.
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

echo "<h2>Número del dado 1: $dado1</h2>";
echo "<h2>Número del dado 2: $dado2</h2>";

echo "<img src='images/$dado1.svg'>";
echo "<img src='images/$dado2.svg'>";

?>