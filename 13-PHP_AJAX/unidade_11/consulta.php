<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <main>
            <div id="janela_formulario">
                <form id="pesquisarProdutos">
                    <label for="categorias">Categorias</label>
                    <select id="categorias">
                        
                    </select>
                </form>
            </div>
        </main>
        
        
        <script src="_js/jquery.js"></script>
        <script>
            function retornarCategorias(data) {
                var categorias = "";
                $.each(data, function(chave, valor) {
                    categorias += '<option value="' + valor.categoriaID + '">' + valor.nomecategoria + '</option>';
                });
                $('#categorias').html(categorias);
            }
        </script>
        <script src="http://localhost/php_ajax/unidade_11/retornar_categorias.php?callback=retornarCategorias"></script>
    </body>
</html>