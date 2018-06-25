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

    /* explode é uma função que explode uma string e armazena  cada palavra em um array.
    */

    $s = "curso em video";
    $v = explode(" ",$s);
    var_dump($v);

    ?>
</div>
</body>
</html>