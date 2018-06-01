<?php 
    // PHP aceita null, Null ou NULL:
    $nome = null;
    $endereco = "";
    $telefone = "2315-6541";
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "A variável está configurada? " . isset($nome) . "</br>";
            echo "A variável está configurada? " . isset($endereco) . "</br>";
            echo "A variável está configurada? " . isset($telefone) . "</br>";
            echo "A variável está configurada? " . isset($cep) . "</br>";
        ?>
    </body>
</html>