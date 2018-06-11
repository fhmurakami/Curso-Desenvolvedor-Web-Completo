<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    // Inserir no banco de dados:
    if (isset($_POST["nometransportadora"])) {
        $nomeTransportadora = utf8_decode($_POST["nometransportadora"]);
        $endereco = utf8_decode($_POST["endereco"]);
        $telefone = utf8_decode($_POST["telefone"]);
        $cidade = utf8_decode($_POST["cidade"]);
        $estado = $_POST["estados"];
        $cep = $_POST["cep"];
        $cnpj = $_POST["cnpj"];
        
        $inserir = "INSERT INTO transportadoras ";
        $inserir .= "(nometransportadora, endereco, telefone, cidade, estadoID, cep, cnpj) ";
        $inserir .= "VALUES ";
        $inserir .= "('$nomeTransportadora', '$endereco', '$telefone', '$cidade', $estado, '$cep', '$cnpj') ";
        
        $operacao_inserir = mysqli_query($conecta, $inserir);
        if (!$operacao_inserir) {
            die("Erro no banco de dados");
        }
    }
    
    // Consulta ao banco de dados:
    $estados = "SELECT estadoID, nome, sigla ";
    $estados .= "FROM estados ";
    $listaEstados = mysqli_query($conecta, $estados);
    // Teste de consulta
    if (!$listaEstados) {
        die("Falha no banco de dados.");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="_css/crud.css">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
           <div id="janela_formulario">
               <form action="inserir_transportadoras.php" method="post">
                   <input type="text" name="nometransportadora" placeholder="Nome da Transportadora">
                   <input type="text" name="endereco" placeholder="Endereço">
                   <input type="text" name="telefone" placeholder="Telefone">
                   <input type="text" name="cidade" placeholder="Cidade">
                   <select name="estados">
                        <?php 
                            while ($dadosEstado = mysqli_fetch_assoc($listaEstados)) {
                                $estadoID = $dadosEstado["estadoID"];
                                $nomeEstado = $dadosEstado["nome"];
                                $siglaEstado = $dadosEstado["sigla"];
                        ?>
                        <option value="<?php echo $estadoID ?>">
                            <?php echo utf8_encode($nomeEstado) ?>
                        </option>
                        <?php 
                           } 
                        ?>
                   </select>
                   <input type="text" name="cep" placeholder="CEP">
                   <input type="text" name="cnpj" placeholder="CNPJ">
                   <input type="submit" value="Inserir">
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