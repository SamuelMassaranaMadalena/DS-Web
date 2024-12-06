<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB</title>
</head>
<body>
    <form action="insertion.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome"><br>
        <label>Email: </label>
        <input type="text" name="email"><br>
        <label>Senha: </label>
        <input type="text" name="senha"><br>
        <input type="submit">
    </form>
    <br><br><br>
    <?php
        include_once("conexao.php");
        //verificar se há registros
        $sql = "SELECT * FROM funcionario";
        $resultado = mysqli_query($conexao, $sql);
        // Verificar se há registros
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
            }
        } else {    
            echo "Nenhum registro encontrado.";
        } 
    ?>
</body>
</html>