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

    /* o Comando print_r() é usado para imprimir variaveis inclusive vetores:*/

    $v[0] = 1;
    $v[1] = 2;
    $v[2] = 3;

    print_r($v);
    echo"print_r()<br>";
    
    // criando um array
    $v2 = array(1,5,4,2,5,8,4);

    print_r($v2);
    echo"print_r()<br>";
   
    var_dump($v);
    echo"var_dump()<br>";

    var_export($v2);
    echo "var_export()";

    ?>
</div>
</body>
</html>