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
    /* o Comando printf tem agumas regras:
     
    para string usa %s e no final depois da ", $string
    para decimal (+) ou (-) usa %d e no final depois da ", $decimal
    para decimal sem (+) ou (-) usa %u e no final depois da ", $decimal 
    para decimal usa %f e no final depois da caso queira usar almentar uma casa decimal basta por %.quantidaderf ex %.2f ", $float*/
        $p = "Leite";
        $pr = 4.5;

        echo "$p custa R$ $pr <br>";

        printf("O %s custa R$ %.2f",$p,$pr);
    ?>
</div>
</body>
</html>
 