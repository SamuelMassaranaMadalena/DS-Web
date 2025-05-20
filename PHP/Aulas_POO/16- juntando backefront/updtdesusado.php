<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once "conexao.php"; 
        $dados = $db->query("SELECT * FROM clientela");
        $todos = $dados->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <?php
            include_once "conexao.php";
            $novoNome = $_POST['nome'];
            $email = $_POST['email'];
            $stmt = $db->prepare('UPDATE clientela SET nome = :nome WHERE email = :email');
            $stmt->execute(array(
                ':nome' => $novoNome,
                ':email' => $email
            ));
            if( $stmt->rowCount() > 0 ) {
                echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
            } else {
                echo 'Nada foi alterado.';
            }
            header("Location: cliente.php");
        ?>
    </div>
</body>