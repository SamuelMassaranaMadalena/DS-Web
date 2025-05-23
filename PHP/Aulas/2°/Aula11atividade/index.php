<?php
    session_start();//começa a sessão
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        header('Location: login.php');
        //se já há uma sessão existente e com os dados de login vai direto pra página inicial
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floricultura atividade</title>
    <style>
        body{
            background-color: lightgray;
            /* cor de fundo */
        }
        form{
            margin-left:40%;
            margin-top:20%;
            margin-right: 40%;
            padding-top:10px;
            padding-bottom:10px;
            /* margin e padding do formulário para deixar ele estilizado */
            background-color: gray;
            border-radius:10px;
            /* deixa borda do canto redonda e deixa a cor de fundo do formulário cinza */
        }
        h1{
            margin-left:37%;
            /* deixa o texto escrito login mais centralizado */
        }
        label, input{
            margin-left: 9%
            /* deixa o texto e o input mais a direitra */
        }
        .de{
            margin-left: 35%;
            /* Deixa o botão de enviar mais a direita */
        }
        span{
            /* no caso de errar o login o texto irá aparecer centralizado abaixo do formulário */
            display: block;
            margin-left: 22%;
        }
    </style>
</head>
<body>
    <div> <!-- div pra conter o formulário -->
        <form action="login.php" method="POST">
            <!-- formulário para mandar as informações pra página home para ver se as informações coincidem com a do banco de dados -->
            <h1>Login</h1>
            <label>Login: </label>
            <input type="text" name="login" placeholder="email@email.com"><br>
            <label>Senha:</label>
            <input type="text" name="senha" placeholder="Senha"><br>
            <input type="submit" class="de">
            <?php
                if(isset($_SESSION['erro'])){
                    echo $_SESSION['erro'];
                    session_unset();
                    //se der erro na sessão vai desfazer a variável da sessão
                }
            ?>
        </form>
    </div>
</body>
</html>