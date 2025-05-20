<?php
    $db = new PDO("mysql:host=localhost;dbname=loja", "root", "");
    $stmt = $db->prepare("SELECT * FROM produtos");
    $stmt->execute();
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($dados as $linha){
        extract($linha);
        echo "id: $id - ";
        echo "nome: $nome - ";
        echo "codigo: $codigo - ";
        echo "estoque: $estoque - ";
        echo "preco: $preco - ";
        echo "<br>";
    }
?>