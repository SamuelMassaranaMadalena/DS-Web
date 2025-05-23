<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Home </title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/16/img/ico.svg">
    <link rel="stylesheet" href="../assets/16/style/style.css">
</head>
<body>
    <div>
    <ul>
        <li><a href="index.php" class="meumenu meumenu-active" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
        <li><a href="#" class="meumenu" title="Produtos">Produtos</a></li>
        <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
</ul>
    </div>
    <div class="container">
        <hr> 
        <h1>Dashboard</h1>
        <p>A dashboard encontra-se em desenvolvimento, os dados processados até o momento são: </p>
    <?php    
        include "conexao.php";
        
        $dados = $db->query("SELECT * FROM clientela");
        echo "Quantidade de clientes registrados: " . $dados->rowCount();
        
    ?>
    </div>
</body>
<script src="../assets/16/JS/script.js"></script>
</html>