<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Aula 8 Integrando com HTML</title>
</head>
<body>
<div>
    <?php
      $valor = $_GET["v"];
      $raizValor = sqrt($valor);
      echo " A raiz quadrada de $valor é " .number_format($raizValor,2);
        
    ?>
</div>
</body>
</html>