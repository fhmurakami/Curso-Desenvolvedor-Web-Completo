<?php
    $salario = 800;
    $gasolina = 2.792341;
    $nome = "Felipe";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "$salario é um número? " . is_numeric($salario) . "</br>";
            echo "$gasolina é um número? " . is_numeric($gasolina) . "</br>";
            echo "$nome é um número? " . is_numeric($nome) . "</br></br>";

            // testar se é inteiro
            echo "$salario é um número inteiro? " . is_int($salario) . "</br>";
            echo "$gasolina é um número inteiro? " . is_int($gasolina) . "</br></br>";

            // testar se é float
            echo "$salario é um número float? " . is_float($salario) . "</br>";
            echo "$gasolina é um número float? " . is_float($gasolina) . "</br></br>";
            
            // Arredondamento:
            // round arredonda para o número mais próximo (maior ou menor)
            echo round($gasolina) . "</br>";
            // floor arredonda sempre para baixo:
            echo floor($gasolina) . "</br>";
            // ceil arredonda sempre para cima:
            echo ceil($gasolina) . "</br>";
            // arredondar com 'n' casas decimais:
            echo round ($gasolina, 3) . "</br>";
        ?>
        
        
    </body>
</html>