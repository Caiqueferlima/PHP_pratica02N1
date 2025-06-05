<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 34</title>
</head>
<body>
    <?php
        function mediaDoAluno($nota1, $nota2, $nota3) {
            return ($nota1 + $nota2 + $nota3) / 3;
        }

        echo" A média do aluno é: " . mediaDoAluno(7, 8, 9);
    ?>
</body>
</html>