<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <?php

$Cor = "VeRde"; 
$Cor = mb_strtolower($Cor, 'UTF-8');
switch ($Cor) {
    case "azul":
        echo "A cor é Azul";
        break;
    case "vermelho":
        echo "A cor é Vermelho";
        break;
    case "verde":
        echo "A cor é Verde";
        break;
    default:
        echo "Escolha uma cor padrão: Vermelho, Azul ou Verde";
        break;
}

?>
</body>
</html>