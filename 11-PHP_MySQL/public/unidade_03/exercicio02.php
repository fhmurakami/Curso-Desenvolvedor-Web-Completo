<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // include();
            // require(); // Para a execução da página em caso de erro
            // include_once(); // Não adiciona repetido
            // require_once(); // Idem include_once()
            require_once("pagina2.php");
            echo "</br>";
            require_once("pagina2.php");
            echo "</br>";
            include_once("pagina1.php");
        ?>
    </body>
</html>