<?php
    include_once("conect.php");
    
    $nomec = $_POST['nomec'];
    $email = $_POST['email'];

    $sql = "INSERT INTO  cliente(nome, email) VALUES ('$nomec', '$email')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro de produto inserido com sucesso!";
        header("Location: index.php");
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>