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

    /* O comando str_word_count() conta a quantidade de palavras dentro de uma string se dentro da função tiver (,0)
    se dentro da função tiver (,1) a função ira tornar a função um array e se usar um var_dump() ou print_r() exibira a função.
    se dentro da função tiver (,2) a função ira tornar a função um array mantendo a posição que a palavra possui dentro da string e se usar um var_dump() ou print_r() exibira a função.
    */

    $f = "Eu Vou Estudar PHP";
    $c = str_word_count($f,0);
    echo $f." qnt: <span class='foco'>$c</span>";
    
    echo"<br>";
    $a = str_word_count($f,1);
    var_dump($a);

    echo"<br>";
    $A = str_word_count($f,2);
    var_dump($A);

    ?>
</div>
</body>
</html>