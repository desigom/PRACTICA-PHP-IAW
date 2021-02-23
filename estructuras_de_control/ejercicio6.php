<?php
// Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las estructuras de control if - else y switch.
$dado1 = rand(1, 6);

echo "<h2>Número del dado 1: $dado1</h2>";

echo "<img src='images/$dado1.svg'>";

?>