<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 29</title>
</head>
<body>
    <?php
        $quantidadeProduzida = 0;
        $registroCiclos = [];

        while ($quantidadeProduzida < 5) {
            $quantidadeProduzida++;
            $registroCiclos[] = $quantidadeProduzida;
        }

        foreach ($registroCiclos as $ciclo => $quantidade) {
            echo "Ciclo " . ($ciclo + 1) . ": Quantidade atual = $quantidade<br>";
        }
    ?>
</body>
</html>