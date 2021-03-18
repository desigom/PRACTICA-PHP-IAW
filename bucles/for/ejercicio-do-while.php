<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <table border="1">

        <?php
        $i = 1;
        do {
            echo "<td>";
            echo "$i";
            echo "</td>";
            $i++;
        } while ($i <= 10);
        ?>
    </table>
</body>
</html>
