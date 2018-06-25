<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="">
        <?php
            $c=5;
            while($c >= 0){
                echo "<label>Numero $c : <input type='number' name='v$c;'' value='0' min='0' max='100'></label> "."<br>";
                $c --;
            }
        ?>
        <input type="submit" value="Enviar" class="botao" >
    </form>
</div>
</body>
</html>