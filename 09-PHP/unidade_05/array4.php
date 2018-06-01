<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $salada = array("Maçã", "Abacate", "Laranja");
        
            // Retorna se o elemento existe no array, independente da posição:
            echo in_array("Pêra", $salada) . "</br>";    
            echo in_array("Maçã", $salada) . "</br>";
            echo "-----------------------</br>";
        
            // Retorna a posição onde foi encontrado o elemento:
            echo array_search("Laranja", $salada) . "</br>";
            echo array_search("Maçã", $salada) . "</br>";
            echo array_search("Pêra", $salada) . "</br>";
            echo array_search("Abacate", $salada) . "</br>";
        ?>
    </body>
</html>