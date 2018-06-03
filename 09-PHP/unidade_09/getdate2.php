<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // Determinar timezone:
            date_default_timezone_set('America/Sao_Paulo');
            // $agora = getdate();
            
            // Criar elementos:
            /*
            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];
        
            $hora = $agora["hours"];
            $minuto = $agora["minutes"];
            $segundo = $agora["seconds"];
            */
        
            $ano = date("Y");
            $mes = date("m");
            $dia = date("d");
        
            $hora = date("H");
            $minuto = date("i");
            $segundo = date("s");

        
            echo $dia . "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;
        ?>
    </body>
</html>