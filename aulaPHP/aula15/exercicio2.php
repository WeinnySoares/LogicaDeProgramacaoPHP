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
        include "funcoes.php";
        /* Maneiras de incluir scripts de arquivos php externo
        
        include: Inclui scripts de outro arquivo, caso  o arquivo não seja encontrado
        permanecera tentando incluir os arquivos.

        require: requisição de scripts caso o arquivo não seja encontrado a requisição
        será interrompida.

        include_once: semelhante ao include com a diferença que verifica se o arquivo já foi 
        incluido.

        require_once: semelhante ao require com a diferença que verifica se o arquivo já foi 
        requirido.
        
        */
        echo "<h1>Testando Funções</h1>";

        //Chamndo funções do arquivo funcoes.php

        ola();
        mostraValor(5);

        echo "<p>Finalizando o Programa...</p>";
    ?>
</div>
</body>
</html>
 