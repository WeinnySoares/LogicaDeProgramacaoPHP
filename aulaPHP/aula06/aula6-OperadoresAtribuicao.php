<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Aula-6</title>
</head>
<body>
    <div>
        <?php
            echo "<h1>Operadores de Atribuição</h1>";
            echo "Atribuição pela URL";
            $a = $_GET["v1"];
            $b = $_GET["v2"];
            $c = $a+$b;
            echo "Valor de a: $a <br>Valor de b: $b<br>Valor de c: $c<br>";
            $d = $c;
            echo '<br>A operação $d = $d + 5; é equivalente a operação $d +=5; os simbulos += significam que será somado o valor ao valor já existente na variavel.<br>';
            $d = $d + 5;
            echo '$d = $d + 5; = '.$d."<br>";  
            $d = $c;
            $d +=5;
            echo '$e +=5; ='.$d."<br>";
            echo 'A opera variavel ++ exemplo: $v++ soma mais 1 ao valor da variavel<br> ';
            $e = $d;
            $e ++;
            echo '$e ++; = '.$e;
            echo "-----------------------------------";
            // operaçoes para adcionar e subtrair valor
            $a += $b; // a acdiona o valor de a e b
            $a -= $b; // a subtrai o valor de a e b
            $a *= $b; // a mutiplicado pelo valor de a e b
            $a /= $b; // a dividido pelo valor de a e b
            $a %= $b; // a resto da divisão de a e b
            $a .= $b; // a concatenado de a e b 
            
        ?>
    </div>
</body>
</html>
