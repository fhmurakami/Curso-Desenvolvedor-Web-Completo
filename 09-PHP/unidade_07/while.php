<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $contador = 1;
            while ($contador <= 6) {
                $sorteio = rand(1, 60);
                echo $sorteio . " ";
                $contador++;
            }
            
        ?>
    
    </body>
</html>