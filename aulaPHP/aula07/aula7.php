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
        echo "<strong>Exercicios 6 Operador ternário</strong><br>";
        echo "faça uma programa que receba dois valores e subtraia-os os ou somalos";
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s" ) ? $n1 + $n2 : $n1 * $n2;
        echo "o resulatao é $r";
        echo "<br><strong>Exercicio 2 igual ou indentico </strong><br>";
        $res = $n1 === $n2 ?  "identicos" :"iguais" ;
        echo "Os valores $n1 e $n2 são iguais ou identicos?  $res <br>";
        echo "<br><strong>Exercicio 3 media</strong><br>";
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $m = ($nota1 + $nota2)/2 ;
        $s = $m >=6 ? "Aprovado!" : "Reprovado!";
        echo "Vocé tirou $nota1 e $nota2  <br>";
        echo "Sua média é $m e sua situação é $s<br>";
        echo "<br><strong>Exercício 4 Voto obrigatório</strong><br>";
        $idade = $_GET["i"];
        //Técnico Weinny
        $voto = $idade > 64 || $idade < 18 ? "Não obrigatório" : "Obrigatório ";
        echo "Você tem $idade anos, seu voto é $voto";
        $i = &$idade;
        ///Profº Guanabara.
        $v = $idade >= 18 && $idade <65 ? "Obrigatório" : "Não obrigatório";
        echo "<br>Você tem $i anos, seu voto é $v <br>";
    ?>
</div>
</body>
</html>