<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    if (isset($_POST["nometransportadora"])) {
        $tID = $_POST["transportadoraID"];
        
        $excluir = "DELETE FROM transportadoras ";
        $excluir .= "WHERE transportadoraID = {$tID} ";
        $operacao_excluir = mysqli_query($conecta, $excluir);
        if (!$operacao_excluir) {
           die("Erro na exclusão dos dados."); 
        } else {
            header("location: listagem.php");
        }
    }

  // Consulta à tabela de transportadoras
    $tr = "SELECT * FROM transportadoras ";
    if (isset($_GET["codigo"])) {
    $id = $_GET["codigo"];
    $tr .= "WHERE transportadoraID = {$id} ";
}
    $con_transportadora = mysqli_query($conecta, $tr);
    if (!$con_transportadora) {
        die("Erro na consulta ao banco de dados");
    }
    $info_transportadora = mysqli_fetch_assoc($con_transportadora);

    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="_css/alteracao.css">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
           <div id="janela_formulario">
                <form action="exclusao.php" method="post">
                    <h2>Exclusão de Transportadoras</h2>
                    
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["nometransportadora"])  ?>" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["endereco"])  ?>" name="endereco" id="endereco">
                    
                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cidade"])  ?>" name="cidade" id="cidade">
                    
                    <input type="hidden" name="transportadoraID" value="<?php echo $info_transportadora["transportadoraID"] ?>">
                    <input type="submit" value="Confirmar exclusão">                    
                </form>   
            </div>           
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>