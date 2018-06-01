<?php 
    $nome = "José";
    define("MESES", 12);
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "O nome é " . $nome . "</br>";
        
            $nome = "Maria"; 
            echo "O nome é " . $nome . "</br>";
            
            // Uma constante não leva o $, nem deve estar entre aspas ("):
            echo "Quantidade de meses no ano: " . MESES;
            
            define("MESES", 6); // Está linha dá erro, pois não é possível reatribuir um valor a uma constante.
            echo "Quantidade de meses no ano: " . MESES; // Imprime o valor 12.
            
        ?>
    </body>
</html>