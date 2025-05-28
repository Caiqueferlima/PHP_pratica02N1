<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <?php
        $temperatura = "-4";
        if ($temperatura < 0) {
            echo "Alerta de gelo!";
        } elseif ($temperatura >= 0 && $temperatura < 15) {
            echo "Clima ameno";
        } elseif ($temperatura >= 15 && $temperatura < 25) {
            echo "Clima agradável";
        } elseif ($temperatura >= 25) {
            echo "Atenção: Calor Extremo!";
        } else {
            echo "Resposta inválida, digite um número.";
        }
    ?>
</body>
</html>