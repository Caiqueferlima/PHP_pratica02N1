<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 24</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "Item $i processado.<br>";
            if ($i == 50) {
                echo "Processo interrompido para evitar sobrecarga.<br>";
                break;
            }
        }
    ?>
</body>
</html>