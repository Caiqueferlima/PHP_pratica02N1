<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 36</title>
</head>
<body>
    <?php
        function maioridade($idade) {
            if ($idade >= 18) {
                echo "Acesso liberado";
            } else {
                echo "Acesso negado";
            }
        }
        
        echo maioridade(18)
    ?>
</body>
</html>