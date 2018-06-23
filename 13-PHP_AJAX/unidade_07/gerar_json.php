<?php
    // Preparar o arquivo para callback
    $callback = isset($_GET['callback']) ? $_GET['callback'] : false;
    
    // abrir conexao
    $conecta = mysqli_connect("localhost","root","","andes");
    mysqli_set_charset($conecta, 'utf8');

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);

    $retorno = array();
    while($linha = mysqli_fetch_object($produtos)) {
        $retorno[] = $linha;
    }   

    echo ($callback ? $callback . '(' : '') . json_encode($retorno) . ($callback ? ')' : '');
    
    // fechar conecta
    mysqli_close($conecta);
?>