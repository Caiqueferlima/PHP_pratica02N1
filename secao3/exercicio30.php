<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 30</title>
</head>
<body>
    <h2>Tabuadas de 1 a 5</h2>
    <div class="tabuadas">
        <?php
        for ($n = 1; $n <= 5; $n++) {
            echo "<table>";
            echo "<tr><th colspan='2'>Tabuada do $n</th></tr>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $n * $i;
                echo "<tr><td>$n x $i</td><td>=   $resultado</td></tr>";
            }
            echo "</table>";
        }
        ?>
</body>
</html>