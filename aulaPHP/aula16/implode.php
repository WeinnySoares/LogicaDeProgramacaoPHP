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

    /* O comando implode recebe um array e constroi uma string ele funciona da seguite maneira:
    implode ("separador",$array) o separador deve estar entre aspas e serve para colocar o que irá separa um valor do array e outro valor.
    */
    $v[0] = "curso";
    $v[1] = "em";
    $v[2] = "video";

    $t = implode("#", $v);
    print($t);

    echo "<br>";

    // join faz a mesma coisa que o implode

    $t1 = join("/",$v);
    echo $t1;

    ?>
</div>
</body>
</html>