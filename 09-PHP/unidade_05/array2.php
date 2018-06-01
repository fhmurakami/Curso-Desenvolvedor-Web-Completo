<?php 
    $agenda = array("nome" => "José",
                    "sobrenome" => "Silva",
                    "salario" => 800.99);
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php 
                print_r($agenda);
            ?>
        </pre>
        <p>
            <?php echo $agenda["nome"]; ?>
        </p>
    </body>
</html>