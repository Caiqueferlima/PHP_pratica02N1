<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 26</title>
</head>
<body>
    <?php 
        $vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 0];
        do {
            $numero = array_shift($vetor);
            if ($numero == 0) {
                echo "O número é zero, encerrando o loop.<br>";
                break;
            }
            echo "Número: $numero<br>";
        } while ($vetor != 0);
    ?>
</body>
</html>