<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria() {
                $salario = 900;
                return number_format($salario/30, 2);
            }
            
            echo retornarDiaria();
        ?>
    </body>
</html>