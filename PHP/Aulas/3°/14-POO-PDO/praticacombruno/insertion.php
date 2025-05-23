<?php   
    IF($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo '<script>alert("está faltando o metodo POST");
            window.location.href = "index.php"
        </script>';
        // header("Location:index.php"); redirecionamento com php
    }

    include "conexao.php";
    echo "<h2>Inserindo dados</h2>";
    $statement = $db->prepare("INSERT INTO clientes(nome, email) VALUES(?,?)");
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // $statement->execute(array("Samuel", "samasda@gmail.com")); está comentado pra n spamar o bd de novas fileiras
    // $statement->execute(array("Noreu", "noreu@gmail.com"));
    $statement->execute(array($nome, $email));

    header("Location:index.php")
?>