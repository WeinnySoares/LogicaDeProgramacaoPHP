<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Aula 8 exercicio</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]: "Nome não informado" ;
        $anoNasc = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : "Ano de nascimento não informado";
        $sexo =  isset($_GET["sexo"]) ? $_GET["sexo"] : "Sexo não informado";
        $idade = date("Y") - $anoNasc ;

        echo "$nome é $sexo nasceu em $anoNasc e hoje tem $idade";
    ?>
    <a href="aula8-exercicioForm.html">Voltar</a>
</div>
</body>
</html>
 