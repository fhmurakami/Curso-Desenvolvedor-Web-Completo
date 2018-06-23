<?php 
    // Configurações gerais:
    header('Access-Control-Allow-Origin:*'); // Qualquer domínio pode consultar a consulta feita em $selecao

    // Abrir conexão:
    $conecta = mysqli_connect("localhost", "root", "","andes");
    mysqli_set_charset($conecta, 'utf8');
    
    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta, $selecao);
    
    $retorno = array();
    while($linha = mysqli_fetch_object($produtos)) {
        $retorno[] = $linha;
    }
    
    echo json_encode($retorno);
    
    // Fechar conexão:
    mysqli_close($conecta);
?>