<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
        <?php
            $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : 0 ;
            $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : 0 ;
            $media = ($nota1 + $nota2) /2;
        ?>
            <style>
                span.estado{
                    color: #009900;
                }
                span.nota{
                    color: #000099;
                }
                /* a.botao{
                    background: #273747;
                    color: #ffffff;
                    padding: 5px;
                    margin: 5px;
                    border: 2px solid #898989;
                } */
            </style>
        </head>
    <body>
        <div>
            <?php
                echo "A media entre Nota1: <span class='nota'>$nota1</span> e  Nota2: <span class='nota'>$nota2</span> é igual a : <span class='nota'>$media</span> <br>";
                if($media >= 5.5 && $media < 7){
                    $estado = "Recuperação";    
                }
                elseif($media >=7){
                    $estado = "Aprovado";
                }
                else{
                    $estado = "Reprovado";
                }
                echo "A situação do Aluno é : <span class='estado'>$estado</span> <br>";           
            ?>
            <a href="aula9-atividade.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
 