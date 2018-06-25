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
        $v1 = isset($_GET["inicial"]) ? $_GET["inicial"] : 1;
        $v2 = isset($_GET["final"]) ? $_GET["final"] : 10;
        $i = isset($_GET["increm"]) ? $_GET["increm"] : 1;
        
        if($v1 < $v2){
            while($v1 <= $v2){
                echo "$v1 <br>";
                $v1 +=$i;
            }
        }
        else if($v1 > $v2){
            while($v1 >= $v2){
                echo "$v1 <br>";
                $v1 -= $i;
            }
        }
        else{
            echo "Inicial:$v1 igual a Final$v2";
        }
    ?>
</div>
</body>
</html>