<?php
    $db = new PDO("mysql:host=localhost;dbname=loja", "root", "");
    $stmt = $db->prepare("SELECT * FROM clientes");
    $stmt->execute();
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($dados as $linhas){
        extract($linhas);
        echo "id: $id - ";
        echo "nome: $nome - ";
        echo "email: $email - ";
        echo "observação: $observacao";
        echo "<br>";
    }
?>