<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="outro.php" method="post">
            <?php
                session_start(); 
                if(isset($_SESSION['login']) or isset($_COOKIE['login'])){
                    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){    
                        $user = array("", "samuel");
                        $senha = array("", "massarana");
                        // if($_SESSION['login'] == $user[1] and $_SESSION['senha'] == $senha[1]){
                        //     header('Location: outro.php');
                        // }
                        if($_COOKIE['login'] == $user[1] and $_COOKIE['senha'] == $senha[1]){
                            header('Location: outro.php');
                        }
                    }
                }
            ?>
            <h1>Login</h1>
            <label>Nome de usuário</label>
            <input type="text" name="login">
            <br>
            <label>Senha</label>
            <input type="text" name="senha">
            <br>
            <input type="submit">
        </form>
        <!-- <a href="index.php">Não é cadastrado?</a> -->
    </div>
</body>
</html>