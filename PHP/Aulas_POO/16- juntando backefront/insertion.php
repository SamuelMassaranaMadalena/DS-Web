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

    include "clienteValida.php";
    if (validaCliente($nome, $email, $observacao)){

        include "conexao.php";
        $statement = $db->prepare("INSERT INTO clientela(nome, email, observacao) VALUES(:nome,:email,:observacao)");
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':observacao', $observacao);
        // $statement->execute(array("Samuel", "samasda@gmail.com")); está comentado pra n spamar o bd de novas fileiras
        // $statement->execute(array("Noreu", "noreu@gmail.com"));
        $statement->execute();
    }

    header("Location:cliente.php")
?>