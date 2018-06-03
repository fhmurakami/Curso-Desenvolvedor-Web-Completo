<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $data1 = new DateTime('2018-06-03');
            $data2 = new DateTime('2018-09-06');
            $intervalo = $data1->diff($data2);
        ?>
        
        <pre>
            <?php print_r($intervalo); ?>
        </pre>
        
        <pre>
            <?php
                // %r mostra o sinal negativo caso $data2 seja anterior a $data1
                print_r($intervalo->format('%r%a')); 
            ?>
        </pre>
    </body>
</html>