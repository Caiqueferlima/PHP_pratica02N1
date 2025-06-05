<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 35</title>
</head>
<body>
    <?php 
        function parOuImpar($numero) {
            if ($numero % 2 == 0) {
                return true;
            } else {
                return false;
            }
        }

        $numero = parOuImpar(367);
        
        if ($numero) {
            echo "O número é par.";
        } else {
            echo "O número é ímpar.";
        }
    ?>
</body>
</html>