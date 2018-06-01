<?php 
    // PHP aceita null, Null ou NULL:
    $nome = null;
    $endereco = "";
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "A variável é null? " . is_null($nome) . "</br>";
            echo "A variável é null? " . is_null($endereco) . "</br>";
        ?>
    </body>
</html>