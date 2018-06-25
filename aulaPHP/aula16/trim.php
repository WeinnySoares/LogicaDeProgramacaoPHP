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

    /* O Comando wordwrap: usado para formatar strings que são muito grande explo texto*/

    $nome = "   Weinny Soares    ";
    echo $nome." ".strlen($nome);
    $novoNome = trim($nome);

    echo "<br>";

    echo $novoNome." ".strlen($novoNome);
    
    /* ltrim do ingles left trim (esquerda) trim retira os espaços apenas da esquerda de modo semelhante
    a função rtrim do inglês rigth tim (direita) trim. */

    // ltrim
    $novo[1] = "Weinny Soares   ";
    echo $novo[1]." ".strlen($novo[1]);
    $novo[1] = ltrim($novo);//ltrim
    


    ?>
</div>
</body>
</html>