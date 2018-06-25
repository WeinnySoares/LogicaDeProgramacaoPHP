<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicios 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O valor do produto é R$ ".number_format($preco)."<br>";
            $preco += $preco*10/100;
            echo "O valor do produto com 10% de acrescimo é R$ ".number_format($preco,2)."<br>";
            $preco -= $preco*10/100;
            echo "O valor do produto com 10% de desconto é R$ ".number_format($preco,2)."<br>";
            echo "-------------------------------------------------<br>";
            echo "<strong>Exercicio 2 operador de decremento</strong>";
            $atual = $_GET["atual"];
            echo "<br>O ano atual é $atual<br> é o ano anterior é ".--$atual."<br>";
            echo "<strong>Exercicio 3 operador de referencia</strong>";
            $a = 3;
            $b = &$a;
            echo "<br>Variavel a vale $a<br>";
            echo "Variavel b vale $b";
            echo "<br><strong>Exercicio 4 Variaveis de Variaves</strong><br>";
            $site = "cursoemvideo";
            $$site = "Cursophp";
            echo "conteúdo da variável Site ".$site."<br>";
            echo "conteúdo da variável da variavel site ".$cursoemvideo;
        ?>
    </div>
</body>
</html>