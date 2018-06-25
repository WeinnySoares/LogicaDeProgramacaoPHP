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
        
      // Passagem por Valor
      
      function teste($x){

        $x += 2;

        echo $x."<br>";


      }

      $a = 3;

      teste($a);

      echo $a."<br>";

      // Passagem por Referencia

      function testeR(&$x){

        $x += 2;

        echo $x."<br>";
        
      }

      $A = 3;

      testeR($A);

      echo $A;

      /* A passagem de valor por referencia permite que a operação modifique o
      valor inicial da variavel, para utilizar passagem de parametros por referencia 
      basta utilizar "&" a frente do parametro. */
    
    ?>
</div>
</body>
</html>
 