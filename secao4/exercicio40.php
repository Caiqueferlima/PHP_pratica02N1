<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 40</title>
</head>
<body>
    <?php
        function registrarEvento(){
            $timestamp = time();
            echo "O evento foi registrado em [$timestamp]";
        }

        registrarEvento();
    ?>
</body>
</html>