<?php
    session_start(); //inicia a sessão
    if(isset($_POST['login'])){
        //Se foi mandado a informação de login da última página fazer
        include_once("conect.php");
        //inclui o arquivo que conecta ao banco de dados
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        //cria variáveis para o login e senha
        $sql = "SELECT * FROM usuarios where email = '$login' and senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        //variável que seleciona o usuário no banco de dados e que consulta o banco de dados com a informação da primeira variável
        if (mysqli_num_rows($resultado) > 0){
            //se há uma linha ou mais na consulta fazer...
            $linha = mysqli_fetch_assoc($resultado);
            //variável que adquire valores da variável associativa resultado
            $_SESSION['login'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];
            //sessão adquire os valores de login e senha
        }else{
            $_SESSION['erro'] = "<br><span>Login e/ou senha inválidos!</span>";
            // se não tiver linhas na consulta retorna um erro de que não existe esse login
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="aaa">
            <!-- div que armazena o primeiro formulário -->
            <form action="insereu.php" method="POST">
                <label>Nome: </label><br>
                <input type="text" name="nomeu"><br>
                <label>Email: </label><br>
                <input type="text" name="email"><br>
                <label>Senha: </label><br>
                <input type="text" name="senha"><br>
                <input type="submit">
            </form>
            <!-- formulário que envia as informações para inserir no banco de dados na tabela de usuários -->
            <?php
                include_once('conect.php');
                //inclui arquivo de conexão ao banco de dados
                $slct = "SELECT * FROM usuarios";
                $resultado = mysqli_query($conexao, $slct);
                //variáveis pra consulta no banco de dados
                if (mysqli_num_rows($resultado) > 0){
                    // se houver mais de uma linha na consulta..
                    echo "<table>" . "<th>Usuário: </th>" . "<th>Email: </th>" . "<th>Senha: </th></tr>";
                    //exibe em forma de tabela os usuários email e senha
                    while($linha = mysqli_fetch_assoc($resultado)){
                        echo "<tr>" . "<td>" . $linha['nomeuser'] . "</td>" . "<td>" . $linha['email'] . "</td>";
                        if ($_SESSION['login'] == "Admin@net.com" and $_SESSION['senha'] == "@dm1nistr0"){
                            echo "<td>" . $linha['senha'] . "</td>";
                            //porém a senha só aparece para o usuário administrador (primeiro usuário que foi criado)
                        }else{
                            echo "<td>******</td></tr>";
                        }
                    }
                    echo "</table>";
                }
            ?>
        </div>
        <div class="bbb">
            <form action="inserep.php" method="POST">
                <label>Nome:</label><br>
                <input type="text" name="nomep"><br>
                <label>Descrição: </label><br>
                <input type="text" name="descr"><br>
                <label>Preço: </label><br>
                <input type="number" name="preco" step="0.01"><br>
                <input type="submit">
            </form>
            <!-- formulário que envia as informações para inserir no banco de dados na tabela de produtos -->
            <?php
                //mesma coisa do php anterior, porém esse consulta e mostra os produtos em forma de tabela
                include_once('conect.php');
                $slct = "SELECT * FROM produtos";
                $resultado = mysqli_query($conexao, $slct);
                if (mysqli_num_rows($resultado) > 0){
                    echo "<table>" . "<tr><th>Produto: </th>" . "<th>Preço: </th>" . "<th>Descrição: </th></tr>";
                    while($linha = mysqli_fetch_assoc($resultado)){
                        echo "<tr><td>" . $linha['nmprodut'] . "</td>" . "<td>R$ " . $linha['preco'] . "</td>" . "<td>" . $linha['descricao'] . "</td></tr>";
                    }
                }
                echo "</table>";
            ?>
        </div>
    </div>
    <div class="tao">
        <!-- div que guarda os botão de logout e salvar cookies -->
        <?php
            if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
                //se a variável de sessão com login e senha existe, exibe botões
                // um pra logout e outro para salvar cookies, ambos levam para outros arquivos que fazem essas ações 
                echo '<a href="logout.php"><button>Logout</button></a>';
                echo '<a href ="coookie.php"><button> salvar Cookies?</button></a>';
            }else{
                header("location:index.php");   
                // se não houver essas variáveis de sessão de login e senha ele volta para o index
            }
        ?>
    </div>
</body>
</html>