<?php 
// Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for

for ($i = 1; $i <= 10; $i++){
	echo "Tabla del ".$i."<br>";
	for ($a = 1; $a <= 10; $a++){
	    echo $i.'*'.$a.'='.$i*$a."<br>";
	}
	echo "<br>";
	echo "<br>";	
}
?>