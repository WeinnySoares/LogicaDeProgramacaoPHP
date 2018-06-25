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
        /*
            +----------------------------------------------------------------------------------------------------------------------------+
            |                                         EXPLICAÇÃO DAS FUNÇÕES                                                             |
            +----------------------------------------------------------------------------------------------------------------------------+
            |  * stringtolower() é uma função para  converter as letras em minúsculas.                                                   |
            |                                                                                                                            |
            |  * strtoupper() é uma função contrária a stringtolower() torna todas a letras maiúsculas.                                  |
            |                                                                                                                            |
            |  * ucfist() é uma função que torna a primeira letra da primeira palavra como Maiúscula.                                    |
            |    essa função altera apenas a primeira letra da frase e mantem as demais caso queira alterar                              |
            |    as demais para mater apenas a primeira é necessario usar uma função strtolower().                                       |
            |                                                                                                                            |
            |  * ucwords() é semelhante com a ucfirst() com a diferença que a letra que sera alterada será                               |
            |    a primeira letra de cada palavra assim como a ucfirst() para manter  apenas a primeira letra                            |
            |    de cada palavra é necessário que use a função strtolower para dentro da função ex: ucwords(strtolower($palavra))        |
            |                                                                                                                            |
            |  * strrev() reverte todas as palavras ao contrário.                                                                        |
            |                                                                                                                            |
            |  * strpos() procura uma palhavra dentro de uma string e retorna o valor da posição em que ela se encontra                  |
            |  se usar a letra i no comando entre str e pos a função ire ignorar a caixa não diferenciando entre minúscula e maiúscula.  |
            |                                                                                                                            |
            | * substr_count() conta quantas veses encontrou uma determinada palavra.                                                    |
            |                                                                                                                            |
            | * subtr() esse comando permite utilizar pedaço de uma string.                                                              |
            |  funcionamento sbtr($variavel, posição da 1ªprimeira letra que quer utilizar , posição ultima letra)                       |
            |  essa função tem varias utilidades.                                                                                        |
            |                                                                                                                            |
            | * str_repeat() repeti uma palavra as vese especificadas apos a virgula ex: str_repeat("_",10); ira formar uma linha        |
            |  esse comando é util quando deseja se repetir uma string varias veses ex: loren bla bla bla de texto escript em sites como |
            |  modelo.                                                                                                                   |
            |                                                                                                                            |
            | * str_replace() localiza uma string e substitui por outra utilização str_replace("string","novaString");                   |
            |                                                                                                                            |
            +----------------------------------------------------------------------------------------------------------------------------+
        */
                                                   
                                      
        //stringtolower()
        $n = "weinny soares";

        print("strtolower : ".strtolower($n));

        echo "<br>";

        //strtoupper()
        print("strtoupper : ".strtoupper($n));

        echo "<br>";

        // ucfirst
        print("ucfirst : ".ucfirst($n));

        echo "<br>";

        //ucwords
        print("ucwords : ".ucwords($n));

        echo "<br>";

        //strrev()
        print("strrev : ".strrev($n));

        echo "<br>";

        //strpos()
        $f = "Estou aprendendo php";
        $p = stripos($f,"PHP");
        echo "$f<br> A string foi encontrada na posição : $p";

        echo "<br>";

        //substr_count()
        $c = substr_count($f,"PHP");
        print("PHP encontrado $c vezes");

        echo "<br>";

        //subtr
        $s = "curso em video";
        print("substr : ".substr($s,0,5));

        echo "<br>";

        //str_repeat()
        $txt = str_repeat(" Dev ",5);
        print("Texto gerado foi : ".$txt);

        echo "<br>";

        //str_replace()
        $t = "Amo estudar Humanas <3 exatas é muito mais legal!";
        $tc = str_ireplace("humanas","PHP",$t);
        print($tc);


      ?>
    </div>
  </body>
</html>