<?php

    $db = new PDO ("mysql:host=localhost;dbname=cliente", "root", "");  
    
    $dadinhos = $db->query("SELECT * FROM clientela");
    $total = $dadinhos->fetchAll(PDO::FETCH_ASSOC);
    foreach ($total as $fileira){
        echo "Linha: ".$fileira['id'];
        echo " Nome: ".$fileira['nome'];
        echo " E-mail: ".$fileira['email'];
        echo "<br>";
    }
    if(isset($_POST['nome'])){
        $statement = $db->prepare("INSERT INTO clientela(nome, email) VALUES(?,?)");
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $statement->execute(array($nome, $email));
    }
?>