<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 48</title>
</head>
<body>
    <?php
        require "funcao.php";
        helloWorld();

        require_once "funcao.php";
        helloWorld();
    ?>

    <p>Caso o "require_once" venha primeiro e o "require" depois, o arquivo dá um fatal error. Neste arquivo fiz os dois testes, e com o "require_once" vindo depois, nenhum problema aconteceu.</p>
</body>
</html>