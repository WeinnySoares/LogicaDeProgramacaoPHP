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
      
      // Rotina com parametros multiplos

        function soma(){
          $pM = func_get_args();
          $tot = func_num_args();
          
          $s = 0;

          for ($i = 0; $i < $tot; $i ++){
          
            $s += $pM[$i];
          
          }

          return $s;

        }

        /* Chamando uma função não importa a quantidade de valores que for digitado
         a função irá retornar a soma de todos os valores */
         
        $res = soma(3,4,8,1,2,4,8,7);

        echo "O valor da Função soma() é : <span class='foco'>$res</span>";
        
    ?>
</div>
</body>
</html>
 