<?php
    include_once("conexao.php");// inclue a conexao com o Banco de Dados

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO funcionario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!";
        header("Location: index.php");
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>