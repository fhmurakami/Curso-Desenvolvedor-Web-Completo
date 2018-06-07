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

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    </body>
</html>

<?php 
    // Fechar conexão:
    mysqli_close($conecta);
?>