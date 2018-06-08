<?php require_once("../../conexao/conexao.php"); ?>
<?php
    // Verifica se o parametro 'codigo' está configurado na URL:
    if ( isset($_GET["codigo"]) ) {
        $produto_id = $_GET["codigo"];
    } else {
        // Redireciona para a página inicial
        Header("Location: inicial.php");
    }

    // Consulta ao banco de dados
    $consulta = "SELECT * ";
    $consulta .= "FROM produtos ";
    $consulta .= "WHERE produtoID = {$produto_id} ";
    $detalhe    = mysqli_query($conecta,$consulta);

    // Testar erro
    if ( !$detalhe ) {
        die("Falha no Banco de dados");
    } else {
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
        $produtoID      = $dados_detalhe["produtoID"];
        $nomeproduto    = $dados_detalhe["nomeproduto"];
        $descricao      = $dados_detalhe["descricao"];
        $codigobarra    = $dados_detalhe["codigobarra"];
        $tempoentrega   = $dados_detalhe["tempoentrega"];
        $precorevenda   = $dados_detalhe["precorevenda"];
        $precounitario  = $dados_detalhe["precounitario"];
        $estoque        = $dados_detalhe["estoque"];
        $imagemgrande   = $dados_detalhe["imagemgrande"];
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="detalhe_produto">
                <ul>
                    <li class="imagem"><img src="<?php echo $imagemgrande; ?>"></li>
                    <li><h2><?php echo $nomeproduto; ?></h2></li>
                    <li><b>Descrição do Produto:</b> <?php echo $descricao; ?></li>
                    <li><b>Código de Barras:</b> <?php echo $codigobarra; ?></li>
                    <li><b>Tempo de Entrega:</b> <?php echo $tempoentrega; ?> dias</li>
                    <li><b>Preço para Revenda:</b> R$ <?php echo number_format($precorevenda, 2, ",", "."); ?></li>
                    <li><b>Preço Unitário:</b> R$ <?php echo number_format($precounitario, 2, ",", "."); ?></li>
                    <li><b>Unidades em Estoque:</b> <?php echo $estoque; ?> unidades</li>
                </ul>
               
            </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>