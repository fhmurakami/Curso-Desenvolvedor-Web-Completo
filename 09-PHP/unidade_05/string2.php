<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna a quantidade de letras
            echo strlen($_nome) . "</br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome, "u") . "</br>";

            // strripos - Retorna última ocorrência
            echo strripos($_nome, "u") . "</br>";
            
            // strtolower - converte para letras min.
            echo strtolower($_nome) . "</br>";

            // strtoupper - converte para letras min.
            echo strtoupper($_nome) . "</br>";

            // SUBSTR_COUNT - Conta quantas ocorrencias
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo substr_count($_nome, "u") . "</br>";
        ?>
        
        
    </body>
</html>