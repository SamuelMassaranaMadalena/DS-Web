<?php
    $subRota = $caminho[1] ?? NULL;

    switch($subRota){
        case "":
            // echo "<h1> Produto não selecionado</h1>";
            require './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryAll();
            require './views/Produtos/consultaProdutos.php';
            break;
        case "cadastro":
            require "./views/Produtos/cadastroProduto.php";
            break;
        default:
            echo "default";
            if(preg_match('/^produto\/([0-9]+)$/', $url, $matches)){;
                $id = $matches[1];
                
                // echo "<h1>Produto: $id</h1>";
                require './models/produto.php';
                $produto = new Produto;
                $dados = $produto->queryOne([":idProduto" => $id]);
                require './views/Produtos/consultaProduto.php';
            }
            break; 
    }

    // $id = $_GET['id'] ?? null;

    // var_dump($caminho);
?>