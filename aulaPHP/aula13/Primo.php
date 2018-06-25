<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="calcularPrimo.php">

        <label for="ver">Verificar o numero:</label>

        <select id="ver" name="num">

            <?php 

                for($i=1; $i<=100; $i++){

                    echo "<option value='$i'>$i</option>";
                    
                }
                
                
            ?>

        </select>
        <input type="submit" value="Calcular" class="botao">
    </form>
</div>
</body>
</html>
 