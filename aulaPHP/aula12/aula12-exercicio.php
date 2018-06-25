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
        $n = isset($_GET["n"]) ? $_GET["n"] : 2;
        $c = $n;
        $f = 1;
        do{
            $f *= $c;
            $c --;
        }while($c >= 1);
        echo "$n! = $f";
      ?>
      <a href="aula12-exercicio.html" class="botao">Voltar</a>
    </div>
  </body>
</html>