<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="_css/estilo.css"/>
      <meta charset="UTF-8"/>
      <title> aula 9 - Estrutuara condicional exercicio</title>
    </head>
  <body>
    <div>
        <?php
          $a = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : 1900;
          $i = date("Y") - $a;

          echo "Você nasceu em $a e Hoje possui $i anos <br>";
          if($i < 16){
            $tipoVoto = "Não vota";
          }
          elseif( ($i >= 16 && $i < 18) or ($i > 65) ){
            $tipoVoto = "Voto é opcional";
          }
          else{
            $tipoVoto = "Voto é obrigatório";
          }
          echo "Para essa idade, $tipoVoto";
        ?>
    </div>
  </body>
</html>