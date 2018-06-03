<?php 
    $a = 5;
    $b = 8;
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
        
            if ($a > $b) {
                echo "A é maior que B </br>";
                echo "Vá para a página de clientes. </br>";
            }
            else if ($a < $b) {
                echo "A é menor que B. </br>";
            }
            else {
                echo "A é igual a B. </br>";
            }
        ?>
    </body>
</html>