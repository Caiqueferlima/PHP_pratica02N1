<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <?php
    $bebida = "CAFÉ";
    $bebida = mb_strtolower($bebida, 'UTF-8');
    if ($bebida == "café" || $bebida == "chá" || $bebida == "suco") {
        echo "Você escolheu $bebida.";
    } else {
        echo "Bebida não disponível.";
    }
    ?>
</body>
</html>