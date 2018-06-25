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

    /* O Comando wordwrap: usado para formatar strings que são muito grande explo texto
    funcionamento: wordwrap($variavel, quantidade de letras, Quebra de linha, logica);
    pode ser usado tambem para outras coisas como por exmplo especificar que a cada quantidade de letras
    ira iprimir uma linha, o teste logico no final avalia se a palavra tem a quantidade de letras no escpe
    cificada no inicio.
     */

    $txt = "Esse é outro exemplo de string gigante criado para mostrar a função da função php wordwrap";
    $res = wordwrap($txt,8, "<hr>\n", false);
    echo $res;

    ?>
</div>
</body>
</html>