<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="#" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertion.php" method="POST" name="formulario" onsubmit="return validarDadosCliente()">
                <label for="">Nome: </label>
                <input type="text" name="nome">
                <br>
                <label for="">E-mail: </label>
                <input type="text" name="email">
                <br>
                <label>Observação do Cliente:</label>
                <textarea name="observacao" cols="30" rows="4"></textarea>
                <br>
                <input type="submit">
            </form>
        </div>
    
    <?php  
        include 'conexao.php';

        echo "<h2>Consulta com muitas linhas</h2>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        foreach($todos as $linha){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];

            echo "<br>Nome: ".$nomeCliente;
            echo "<br>E-mail: ".$emailCliente;
            echo "<br>";
            echo "<a href='update.php?id=$idCliente'>Editar Cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
            echo "<br><br>";
        }
    ?>
    </div>
</body>
<script src="script.js"></script>
</html>