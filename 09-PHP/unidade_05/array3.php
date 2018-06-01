<?php 
    $lost = array(23, 15, 16, 8, 42, 4);
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Maior número:
            echo max($lost) . "</br>";
            // Menos número:
            echo min($lost) . "</br>";
            // Soma de todos os elementos:
            echo array_sum($lost) . "</br>";
            
            // Ordena em ordem crescente:
            sort($lost);
            
            // Ordena em ordem decrescente:
            rsort($lost);
            
            // Ordem aleatória:
            shuffle($lost);
        ?>
        <pre>
            <?php 
                print_r($lost);
            ?>
        </pre>
    </body>
</html>