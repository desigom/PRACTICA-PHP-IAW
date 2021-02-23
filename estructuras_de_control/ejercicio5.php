<?php
//  Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de control switch.
$dado = rand(1, 6);

echo "<h2>Número del dado: $dado</h2>";

switch ($dado) {
    case 1:
        echo "<img src='images/1.svg'>";
        break;

    case 2:
        echo "<img src='images/2.svg'>";
        break;

    case 3:
        echo "<img src='images/3.svg'>";
        break;

    case 4:
        echo "<img src='images/4.svg'>";
        break;

    case 5:
        echo "<img src='images/5.svg'>";
        break;
    
    case 6:
        echo "<img src='images/6.svg'>";
        
    }


?>