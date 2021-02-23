<?php
// Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta los siguientes rangos:
$nota = rand(0, 10);

echo "<h2>Nota: $nota</h2>";

if ($nota >= 0 && $nota < 5) {
    echo "Insuficiente";
} elseif ($nota >=5 && $nota < 6) {
    echo "Suficiente";
} elseif ($nota >=6 && $nota < 7) {
    echo "Bien";
} elseif ($nota >= 7 && $nota < 9) {
    echo "Notable";
} elseif ($nota >= 9 && $nota <= 10) {
    echo "Sobresaliente";
}

?>