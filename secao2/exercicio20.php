<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <?php
        $usuarioAtivo = true;
        $admin = true;
        if ($usuarioAtivo) {
            echo "Usuário ativo";
            if ($admin) {
                echo " - Acesso total concedido";
            } else {
                echo " - Acesso de usuário comum";
            }
        } else {
            echo "Usuário inativo";
        }
    ?>
</body>
</html>