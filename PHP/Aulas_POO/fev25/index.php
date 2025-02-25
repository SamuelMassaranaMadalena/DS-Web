<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="formulario">
            <form action="insertion.php" method="post">
                <label for="">Nome: </label>
                <input type="text" name="nome">
                <label for="">E-mail: </label>
                <input type="text" name="email">
                <input type="submit">
            </form>
        </div>
    

    <?php    
        include "conexao.php";
        echo "<h2>Exemplo de consulta com muitas linhas</h2>";
        $dados = $db->query("SELECT * FROM clientela");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);//todos os registros retornados
        foreach($todos as $linha){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];

            echo "<br>Nome: ".$linha['nome'];
            echo "<br>E-mail: ".$linha['email'];
            echo "<br>";
            echo "<a href='update.php?id=$idCliente'>Editar cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar cliente</a>";
            echo "<br>";
        }
    ?>
    </div>
</body>
</html>