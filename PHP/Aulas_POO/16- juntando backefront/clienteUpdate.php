<?php   
    IF($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo '<script>alert("está faltando o metodo POST");
            window.location.href = "index.php"
        </script>';
        // header("Location:index.php"); redirecionamento com php
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $observacao = $_POST['observacao'];
    $id = $_GET['id'];
    
    include "conexao.php";
    
    $statement = $db->prepare("UPDATE clientela SET nome = :nome, email = :email, observacao = :observacao WHERE id = :id");
    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':observacao', $observacao);
    $statement->bindParam(':id', $id);
    $statement->execute();

    header("Location:cliente.php")
?>