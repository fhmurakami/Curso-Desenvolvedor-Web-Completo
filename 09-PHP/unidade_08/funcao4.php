<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria($salario, $dias, $cotacao) {
                $real = number_format($salario / $dias, 2, ",", ".");
                $dolar = number_format(($salario / $dias) / $cotacao, 2);
                return array($real, $dolar);
            }
            
        /*
            $diaria_array = retornarDiaria(3200, 15, 3.5);
            echo "R$ " . $diaria_array[0] . "</br>";
            echo "US " . $diaria_array[1] . "</br>";
        */
            list($resultado_real, $resultado_dolar) = retornarDiaria(3200, 15, 3.5);
            echo "R$ " . $resultado_real . "</br>";
            echo "US " . $resultado_dolar . "</br>";
        ?>
    </body>
</html>