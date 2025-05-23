<?php
    include_once("conect.php");//inclui a conexao com o banco de dados
    
    $nomeu = $_POST['nomeu'];//variável pro nome do cliente
    $email = $_POST['email'];//variável pro email do cliente
    $senha = $_POST['senha'];//variável pra senha do cliente

    $sql = "INSERT INTO usuarios(nomeuser, email, senha) VALUES('$nomeu', '$email', '$senha')";
    //variável com valor que insere dados no banco de dados
    if(mysqli_query($conexao, $sql)){
        //consulta que insere conteúdo no banco de dados
        echo "Inserção realizada com succeso";
        header("Location: login.php");
        //exibe que a inserção deu certo e volta pra página Home
    }else{
        echo "Erro ao inserir: " . mysqli_error($conexao);  
        // não conseguir inserir exibe o erro
    }
?>