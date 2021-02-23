<?php

%nota = rand(0, 10);

echo "<h2>Nota: $nota</h2>";

if ($nota >= 0 && < 5) {
    echo "Insuficiente";
} elseif ($nota >=5 && < 6){
    echo "Suficiente";
} elseif ($nota >=6 && < 7){
    echo "Bien";
} elseif ($nota >= 7 && < 8){
    echo "Notable";
} elseif ($nota >= 9 && <= 10){
    echo "Sobresaliente";
}



?>