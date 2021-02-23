
<?php
//  Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda.

$moneda = rand(0, 1);

echo $moneda;

if ($moneda == 0) {
    echo "<img src='images/cara.jpg'>";
} else {
    echo "<img src='images/cruz.jpg'>";
}

?>