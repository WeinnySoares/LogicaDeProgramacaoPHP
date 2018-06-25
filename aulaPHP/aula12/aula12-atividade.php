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
        $n = isset($_GET["tab"]) ? $_GET["tab"] : 1;
        $t = 0 ;
        $r = 0;
        do{
            echo"$n X $t = $r <br>";
            $t ++ ;
            $r = $n * $t;
        }while($t <= 10);
      ?>
      <a class="botao" href="aula12-atividade.html">Voltar</a>
    </div>
  </body>
</html>