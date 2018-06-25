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
        $regiao = isset($_GET["est"]) ? $_GET["est"] : 1;
        switch($regiao){
          case 1:
            echo "Você mora na <span class='foco'>Região Norte</span>";
            break;
          case 2:
            echo "Você mora na <span class='foco'>Região Nordeste</span>";
            break;
          case 3:
            echo "Você mora na <span class='foco'>Região Centroeste</span>";
            break;
          case 4:
            echo "Você mora na <span class='foco'>Região Sudeste</span>";
            break;
          case 5:
            echo "Você mora na <span class='foco'>Região Sul</span>";
            break;
          default:
            echo "<span class='foco'>Erro Região inexistente!</span>";
        }
    ?>
    <a href="javascript:history.go(-1)" class="botao" >Voltar</a>
</div>
</body>
</html>