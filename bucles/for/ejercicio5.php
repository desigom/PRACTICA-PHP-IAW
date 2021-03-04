<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php

for ($tabla = 1; $tabla <= 10; $tabla++){
	$tabla = rand(1, 10);

	echo "<h2>Tabla del: $tabla</h2>";
	echo "<table border=\"1\">";

    for ($i = 1; $i <= 10; $i++){
		echo "<tr>";
        echo "<td>$tabla</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        $resultado = $tabla * $i;
        echo "<td>$resultado</td>";
		echo "</tr>";
    }

	echo "</table>";
}
?>
</body>
</html>