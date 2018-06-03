<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Comparação de igualdade:
            $salario = 800;
            $premio = "800";
            
            if ($salario == $premio) {
                echo "Salário é igual ao premio.</br>";
            } else {
                echo "Salário não é igual ao prêmio.</br>";
            }
        
            // Comparar se é idêntico (mesmo valor e tipo):
            $salario = 800;
            $premio = "800";
            
            if ($salario === $premio) {
                echo "Salário é idêntico ao premio.</br>";
            } else {
                echo "Salário não é idêntico ao prêmio.</br>";
            }
        
            // Testar se é diferente:
            $fumante = true;
            if (!$fumante) {
                echo "Você não é fumante.</br>";
            } else {
                echo "Você é fumante.</br>";
            }
        
            // AND:
            $dia = "sábado";
            $condicao = "sol";
            switch($dia) {
                case "sexta":
                case "sábado":
                case "domingo":
                    $fds = true;
                    break;
                default:
                    $fds = false;
                    break;
            }
        
            if ($fds == true && $condicao == "sol") {
                echo "Vamos à praia</br>";
            }

            // OR:
            $feriado = false;
            if ($fds || $feriado) {
                echo "Dia de descansar.</br>";
            } else {
                echo "Dia de trabalhar.</br>";
            }
            
        ?>
    </body>
</html>