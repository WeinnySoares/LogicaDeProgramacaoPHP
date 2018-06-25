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

    /* string_split é uma função que explode uma string e armazena cadaletra em um array.
    */
    $n = "maria";

    $v = str_split($n);

    var_dump($v);

    ?>
</div>
</body>
</html>