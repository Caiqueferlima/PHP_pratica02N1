<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 28</title>
</head>
<body>
    <?php
        $min = 50;
        $max = 5000;
        $soma = 0;
        for ($i = 1; $i <= 100; $i++) {
            $numeroAleatorio = rand($min, $max);
            $soma += $numeroAleatorio;
        }
        echo "A soma dos 100 números aleatórios é: $soma<br>";
    ?>
</body>
</html>