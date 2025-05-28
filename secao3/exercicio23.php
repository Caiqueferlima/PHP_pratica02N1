<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 23</title>
</head>
<body>
    <?php 
        echo "<h2>O produto será lançado em...</h2>";
        for ($i = 5; $i >= 0; $i--) {
            if ($i == 0) {
                echo "<br> Produto lançado! <br>";
                break;
            }
            echo "contagem: $i <br>";
        }
    ?>
</body>
</html>