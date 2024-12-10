<?php
    include_once('conect.php');//inclui a conexao com o banco de dados

    $nomep = $_POST['nomep'];//variável pro nome do produto
    $descr = $_POST['descr'];//variável pra descrição do produto
    $preco = $_POST['preco'];//variável pro preço do produto

    $sql = "INSERT INTO produtos(nmprodut, descricao, preco) VALUES('$nomep', '$descr', '$preco')";
    //variável com valor que insere dados no banco de dados
    if(mysqli_query($conexao, $sql)){
        //consulta que insere conteúdo no banco de dados
        echo "inserção realizada com sucesso";
        header("Location: login.php");
        //exibe que a inserção deu certo e volta pra página Home
    }else{
        echo "Erro ao inserir: " . mysqli_error($conexao);  
        // não conseguir inserir exibe o erro
    }
?>