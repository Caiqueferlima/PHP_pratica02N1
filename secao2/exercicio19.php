<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <?php

    $cargo = "GerEnTe";
    $cargo = mb_strtolower($cargo, 'UTF-8');

    if ($cargo == "desenvolvedor") {
        $salarioBase = 5000;
        echo "Salário base: R\$$salarioBase";
    } elseif ($cargo == "designer") {
        $salarioBase = 4000;
        echo "Salário base: R\$$salarioBase";
    } elseif ($cargo == "gerente") {
        $salarioBase = 8000;
        echo "Salário base: R\$$salarioBase";
    } else {
        echo "Cargo não reconhecido.";
    }

?>

</body>
</html>