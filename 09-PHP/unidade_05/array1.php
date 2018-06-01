<?php 
    $salada = array("Maçã", "Abacate", "Laranja");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo $salada[0] . "</br>";
            echo $salada[1] . "</br>";
            echo $salada[2] . "</br>";
            echo count($salada) . "</br>";
            $salada[] = "Kiwi";
            echo count($salada) . "</br>";
        ?>
        
        <pre>
            <?php 
                print_r($salada);
            ?>
        </pre>
    </body>
</html>