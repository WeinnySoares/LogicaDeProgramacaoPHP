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
      $n = isset($_GET["num"])? $_GET["num"]: 1;
      
      $mult = 0;

      for($i=1; $i <= $n; $i++){
        
        if($n % $i == 0){
         
          echo "$i  ";
      
          $mult ++;
      
        }
              
      }

      if($mult == 2){
        echo "o numero $n é um numero <span class='foco'>Primo</span>";
      }else{
        echo "O numero $n <span class='foco'>não é um numero Primo</span>";
      }
        
    ?>
</div>
</body>
</html>
 