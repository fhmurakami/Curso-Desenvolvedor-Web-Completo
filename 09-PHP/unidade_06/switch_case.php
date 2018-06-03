<?php 
    $dia = "sexta";
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            switch ($dia) {
                case "segunda":
                    echo "Hoje ainda é segunda :( </br>";
                    break;
                case "quarta":
                    echo "Hoje não é sexta, mas está chegando.. </br>";
                    break;
                case "sexta":
                case "sábado":
                case "domingo":
                    echo "AEEEEEEE!!! FIM DE SEMANA!!! \o/</br>";
                    break;
                default:
                    echo "Fim de semana está chegando..</br>";
                    break;
            }
        ?>
    </body>
</html>