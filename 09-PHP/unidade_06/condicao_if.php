<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $a = 5;
            $b = 3;
            
            if ($a > $b) {
                echo "A é maior que B </br>";
                echo "Vá para a página de clientes. </br>";
            }
        
            $fumante = true;
            
            if($fumante) {
                echo "Proibida a entrada.";
            }
        ?>
    </body>
</html>