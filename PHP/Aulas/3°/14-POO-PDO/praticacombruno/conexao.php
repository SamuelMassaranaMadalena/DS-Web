<?php

    //MySQL
    $db = new PDO ("mysql:host=localhost;dbname=pdo", "root", "");

    // var_dump($db);
    // echo "<br><br>";
    // print_r($db);

    // echo "<h2>Exemplo de consulta com uma linha</h2>";
    // $dados = $db->query("SELECT * FROM clientes");
    // $todos = $dados->fetch(PDO::FETCH_ASSOC);
    // print_r($todos);
    // echo "<br>";
    // // pro fetchAll echo $todos[0]['email'];
    // echo $todos['email'];//pro fetch somente
?>