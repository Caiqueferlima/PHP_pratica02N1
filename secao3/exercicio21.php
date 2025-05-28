<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 21</title>
</head>
<body>
    <?php 
        // Essa questão ficou ambígua, no enunciado pede contagem regressiva, mas também em ordem crescente. Na dúvida, fiz os dois.
        echo "<h2>Contagem Regressiva de 10 a 1:</h2>";
        for ($i = 10; $i >= 1; $i--) {
            echo "Número: $i <br>";
        }
        echo "<h2>Contagem Crescente de 1 a 10:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "Número: $i <br>";
        }
    ?>
</body>
</html>