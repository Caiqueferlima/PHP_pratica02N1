<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Prática 02N1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Seções e Exercícios</h1>

  <div class="container">
    <?php
    $secoes = glob('secao*');

    foreach ($secoes as $secao) {
      echo "<div class='secao'>";
      echo "<h2>" . ucfirst($secao) . "</h2>";
      
      $exercicios = glob("$secao/ex*");

      foreach ($exercicios as $ex) {
        $nome = basename($ex);
        echo "<a class='botao' href='$ex/' target='_blank'>$nome</a>";
      }

      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
