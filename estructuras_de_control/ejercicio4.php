<?php
// Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio utilizando la estructura de control if - else.
$dado = rand(1, 6);

echo "<h2>Número: $dado</h2>";

if ($dado == 1) {
    echo "<img src='images/1.svg'>";
} elseif ($dado == 2) {
    echo "<img src='images/2.svg'>";
} elseif ($dado == 3) {
    echo "<img src='images/3.svg'>";
} elseif ($dado == 4) {
    echo "<img src='images/4.svg'>";
} elseif ($dado == 5) {
    echo "<img src='images/5.svg'>";
} elseif ($dado == 6) {
    echo "<img src='images/6.svg'>";
}

?>