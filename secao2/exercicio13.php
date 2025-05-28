<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <?php
    $n1 = 0;
    $n2 = 2;
    $n3 = 8;
    $media = ($n1 + $n2 + $n3) / 3;
    if ($media >= 7) {
        echo "Aprovado com média: " . number_format($media, 2, ",");
    } elseif ($media >= 5) {
        echo "Recuperação com média: " . number_format($media, 2, ",");
    } else {
        echo "Reprovado com média: " . number_format($media, 2, ",");
    }
    ?>
</body>
</html>