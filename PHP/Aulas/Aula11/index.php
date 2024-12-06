<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB</title>
    <style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
        .horizontal div{
            padding: 20px;
            border: 1px solid lightgrey;
            justify-content: center;
        }   
    </style>
</head>
<body>
    <div class="horizontal">
        <div>
            <h1>Formulário Cadastro</h1>
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
            ?></div>
        <div>
            <h1>Formulário consulta</h1>
            <form action="index.php" method="GET">
                <label>Nome: </label>
                <input type="text" name="nome">
                <br>
                <input type="submit">
            </form>
            <br><br><br>
            <?php
                echo '<br>';
                if(isset($_GET['nome'])){
                    $nome = $_GET['nome'];
                    //verificar se há registros

                    //Exemplo de pesquisa simples usando o "igual"
                    // $sql = "SELECT * FROM funcionario WHERE nome = '$nome'";

                    // SELECT * FROM funcionario WHERE nome LIKE '$nome_'       faz algo
                    // SELECT * FROM funcionario WHERE nome LIKE ('$nome%', '%$nome' e '%$nome%)  faz uma tentativa de achar algo que consiga completar
                    // se for no começo é o que completa antes do escrito, se  no fim é o que consegue completar, se no fim e começo é o que consegue completar em ambos

                    $sql = "SELECT * FROM funcionario WHERE nome LIKE '%$nome'";
                    $resultado = mysqli_query($conexao, $sql);
                    // Verificar se há registros
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                            echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                        }
                    } else {    
                        echo "Nenhum registro encontrado.";
                    } 
                }
            ?>
        </div>
    </div>
</body>
</html>