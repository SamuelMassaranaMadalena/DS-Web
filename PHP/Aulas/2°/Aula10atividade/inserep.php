<?php
    include_once("conect.php");

    $nomepr = $_POST['nomep'];
    $valorr = $_POST['valor'];
    $estoquer = $_POST['estoque'];

    $sql = "INSERT INTO produto(nome, valor, estoque) VALUES ('$nomepr', '$valorr', '$estoquer')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro de produto inserido com sucesso!";
        header("Location: index.php");
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>