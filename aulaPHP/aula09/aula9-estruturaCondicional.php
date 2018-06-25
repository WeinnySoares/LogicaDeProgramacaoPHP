<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>aula 9 - Estrutuara condicional</title>
</head>
<body>
<div>
    <?php
        $nasc = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : "1500";
        $idade = date("Y") - $nasc;
        echo "Você nasceu em $nasc e tem $idade anos de vida <br>";
        if ($idade >= 18){
            $votar = "Já pode votar";
            $dirigir = "Já pode dirigir";
        }
        else{
            if($idade >= 16 && $idade < 18){
                $votar = "Pode votar se quiser";
                $dirigir = "Não pode dirigir";
            }
            else{
                $votar = "Não pode votar";
                $dirigir = "Não pode dirigir";
            }
        }
        echo "Com essa idade você $votar e você $dirigir";
    ?>
</div>
</body>
</html>