<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 38</title>
</head>
<body>
    <?php
        function formatarPreco($preco) {
            return "O valor informado é: R$ " . number_format($preco, 2, ',', '.');
        }

        echo formatarPreco(145674234.56000);
    ?>
</body>
</html>