<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 27</title>
</head>
<body>
    <?php
        $listaDeParticipantes = [
            "Caíque",
            "Maria Clara",
            "Raquel",
            "Guilherme",
            "Emilly",
            "Vytorya"
        ];
        echo "<h2>Lista de Participantes: </h2>";
        foreach ($listaDeParticipantes as $participante => $value) {
            echo "Participante: $value <br>";
        }
    ?>
</body>
</html>