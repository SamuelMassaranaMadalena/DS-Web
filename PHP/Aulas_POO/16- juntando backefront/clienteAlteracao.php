<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - clientes</title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/16/img/ico.svg">
    <link rel="stylesheet" href="../assets/16/style/style.css">

</head>
<body>
    <div>
    <ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu meumenu-active" title="Clientes">Clientes</a></li>
        <li><a href="#" class="meumenu" title="Produtos">Produtos</a></li>
        <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
</ul>
    </div>
    <div class="container">
        <hr>
        <?php
            if($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET['id'])){
                header("Location: cliente.php");
            }
        
            include "conexao.php";
            $id = $_GET['id'];
            $stmt = $db->prepare("SELECT * FROM clientela WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $dados = $stmt->fetch(PDO::FETCH_ASSOC);//dados os registros retornados
            $idCliente = $dados['id'];
            $nomeCliente = $dados['nome'];
            $emailCliente = $dados['email'];
            $obs = $dados['observacao'];
            // var_dump($dados);
        ?>
        <div class="formulario">
            <form action="clienteUpdate.php?id=<?=$idCliente?>" method="post" name="formulario" onsubmit="return validarDadosCliente()">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?= $nomeCliente?>">
                <p class="erro-input" id="erro-nome"></p>

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" value="<?= $emailCliente?>">
                <p class="erro-input" id="erro-email"></p>
                
                <label for="obs">Observação do Cliente:</label>
                <textarea name="observacao" id="obs" cols="30" rows="4" ><?= $obs?></textarea>
                <p class="erro-input" id="erro-observacao"></p>
                
                <input type="submit">
            </form>
        </div></div>
</body>
<script src="../assets/16/JS/script.js"></script>
<script src="https://kit.fontawesome.com/d12eaa1270.js" crossorigin="anonymous"></script>
</html>