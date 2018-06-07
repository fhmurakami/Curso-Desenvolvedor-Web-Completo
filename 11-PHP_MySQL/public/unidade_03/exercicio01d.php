<?php 
    // Passo 1 - Abrir conexão:
    // mysqli_connect("nome do servidor do banco de dados", "nome do usuário do banco de dados", "senha", "nome do banco de dados");
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";
    $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

    // Passo 2 - Testar conexão:
    if (mysqli_connect_errno()) {
        // Mata a conexão em caso de falha:
        die("Conexao falhou: " . mysqli_connect_errno());
    }
?>

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