<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

    /* O comando chr() recebe um numero de código da tabela asc e verifica qual letra coresponde aquele código.
    Já o camando ord() faz a operação inversa ao digitar uma letra consulta a tabela asc e traz o código que a letra corresponde.
    */


    // chr()
    $c = "99";

    $l = chr($c);

    echo "O código é da letra: $l";

    // ord()
    $L = "c";

    $C = ord($L);

    echo "<br> A letra digitada corresponde ao código: $C";

    
    ?>
</div>
</body>
</html>