<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <?php

$estadoCivil = "O"; 

switch ($estadoCivil) {
    case "S":
        echo "Estado civil: Solteiro(a)";
        break;
    case "C":
        echo "Estado civil: Casado(a)";
        break;
    case "D":
        echo "Estado civil: Divorciado(a)";
        break;
    case "O":
        echo "Estado civil: Outro";
        break;
    default:
        echo "Estado Civil inválido! Digite C para Casado(a), S para Solteiro(a), D para Divorciado(a) ou O para Outro.";
        break;
}

?>
</body>
</html>