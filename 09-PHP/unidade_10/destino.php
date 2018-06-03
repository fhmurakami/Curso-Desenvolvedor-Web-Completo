<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $salada = array("imagens/laranja.jpg", "imagens/maca.jpg", "imagens/abacate.jpg");
            $fruta = $_GET["codigo"];
        ?>
        
        <img src="<?php echo $salada[$fruta]; ?>">
    </body>
</html>