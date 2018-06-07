<!-- Conexão aberta através do arquivo conexao.php na pasta conexao (Passos 1 e 2) -->

<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    // Passo 3 - Abrir consulta ao banco de dados:
    // .= concatena as consultas:
    $consulta_categorias = "SELECT *";
    $consulta_categorias .= " FROM categorias";
    // $consulta_categorias .= " WHERE categoriaID > 2";
    $categorias = mysqli_query($conecta, $consulta_categorias);

    if (!$categorias) {
        die("Falha na consulta ao banco.");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <ul>
            <?php 
                // Passo 4 - Listagem dos dados:
                while($registro = mysqli_fetch_assoc($categorias)) {
            ?>
            <li><?php echo $registro["nomecategoria"]; ?></li>
            <?php
                }
            ?>
        </ul>
        <?php 
            // Passo 5 - Liberar dados da memória do servidor
            mysqli_free_result($categorias);
        ?>
    </body>
</html>

<?php 
    // Passo 6 - Fechar conexão:
    mysqli_close($conecta);
?>