<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </div>

    <?php
        include_once "conexao.php";

        echo "<h2>Exemplo de consulta com muitas linhas</h2>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);//todos os registros retornados
        foreach($todos as $linha){
            echo "Linha: ".$linha['id'];
            echo " Nome: ".$linha['nome'];
            echo " E-mail: ".$linha['email'];
            echo "<br>";
        }
    ?>
</body>
</html>