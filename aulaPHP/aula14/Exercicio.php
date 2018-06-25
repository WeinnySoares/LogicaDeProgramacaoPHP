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
       
      // Função sem return

       function soma($a, $b){
         
        $s = $a + $b;

        echo "<p>A soma entre $a e $b é <span class='foco'>$s</span> </p>";

       }

       //chamada de função

       soma(50,50);

       soma(60,40);

       $x = 5;

       $y = 95;

       soma($x,$y);

       /////////////////////////////
       echo "Function com retorn";
       ////////////////////////////

       // Função com retorno

       // A função pode retornar qualquer tipo por ex: String
       function somaR($a,$b){

        $s = $a + $b;

        $r = "<p>A Soma entre A:$a e B:$b é $s</p>";

        return $r;

       }
       // A função tambem pode retornar o resulatado de uma operação
       function somar($a,$b){

        return $a + $b;

       }

       // Chamada de Função

       $r = somaR(80,20);
       echo $r;
       echo somaR(40,60);
       
    ?>
</div>
</body>
</html>
 