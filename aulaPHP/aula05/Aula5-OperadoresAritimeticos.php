<DOCTYPE html> 
  <html lang="pt-br">
    <head>
      <link rel="stylesheet" href="_css/estilo.css" />
      <meta charset="UTF-8">
      <title> php aula 6</title>
    </head>
    <body>
      <div>
        <?php
          echo "<h1>Aula 5 Operadores aritiméticos</h1>";
          $n1 = 3;
          $n2 = 2;
          echo "<br/>A soma vale ". ($n1+$n2);
          echo "<br/>A substraçao vale ". ($n1-$n2);
          echo "<br/>A multiplicação vale ". ($n1*$n2);
          echo "<br/>A divisao vale ". ($n1/$n2);
          echo "<br/>O modulo vale ". ($n1%$n2);
          echo "<br>---------------------------------------------<br>";
          // media $n1 e $n2
          echo "<h2>média</h2>";
          $m = ($n1+$n2)/2;
          echo "<br>A Média entre $n1 e $n2 é igual à: ".$m;
          echo "<br>---------------------------------------------<br>";
          echo "<br><h2>Valores Recebidos pela URL</h2><br>";
          $a = $_GET["a"];
          $b = $_GET["b"];
          echo "Valores recebidos $a e $b ";
          echo "<br>---------------------------------------------<br>";
          echo "<h2>Funções matematicas Absoluta e potenciação<br></h2>";
          echo "O valor absoluto de $b é ".abs($b)."<br>";
          echo "O valor absoluto de $a<sup>$b</sup> é ".pow($a,$b)."<br>";
          echo "A raiz de $a é ".sqrt($a)."<br>";
          echo "O valor de $b aredondado é ".round($b)."'ceil': aredonda para cima, e 'floor' arredonda parabaixo<br>";
          echo "O valor inteiro da variavel $b é ".intval($b);
          echo "O valor formatado de $a é R$".number_format($a,2);
          echo "<br>---------------------------------------------<br>";

        ?>
      </div>
    </body>
  </html>