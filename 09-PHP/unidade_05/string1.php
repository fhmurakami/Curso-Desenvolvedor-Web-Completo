<?php 
    $_nome = "Maria";
    $_sobrenome = "Silva";
    // O ponto (.) serve para concatenar strings em PHP:
    $_nomecompleto = $_nome . " " . $_sobrenome;
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p>
            <?php 
                echo $_nomecompleto;
            ?>
        </p>
    </body>
</html>