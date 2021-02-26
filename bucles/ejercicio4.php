<?php
// Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un bucle for
$tabla = rand(1,10);

    for ($tabla = $tabla; $tabla <= 10; $tabla){
        echo "Tabla del ".$tabla."<br>";
        for ($a = 1; $a <= 10; $a++){
            echo $tabla.'*'.$a.'='.$tabla*$a."<br>";
    }
        echo "<br>";
        echo "<br>";	
}

?>