<?php
    include_once "conexao.php";

    $id = $_GET['id'];
    $stmt = $db->prepare("DELETE FROM clientela WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        echo "Deletou" . $stmt->rowCount() . "linhas";
    }else{
        echo "Não deletou nenhuma linha";
    }
?>