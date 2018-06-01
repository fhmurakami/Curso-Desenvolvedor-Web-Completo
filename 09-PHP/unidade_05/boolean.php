<?php 
    // PHP aceita as formas: true/false, True/False ou TRUE/FALSE:
    //$fumante = false;
    $fumante = True;
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "É fumante? " . $fumante . "</br>";
            $fumante = false;
            echo "É fumante? " . $fumante . "</br>";
        
            echo "----------------------------</br>";
            echo "É booleana? " . is_bool($fumante);
        ?>
    </body>
</html>