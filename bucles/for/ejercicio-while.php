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
            while ($i <= 10) {
                echo "<td>";
                echo "$i";
                echo "</td>";
                $i++;
            }
        ?>
    </table>
</body>
</html>
