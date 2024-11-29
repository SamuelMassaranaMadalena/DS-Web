<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        echo 'tocantins';


        $user = array("", "samuel");
        $senha = array("", "massarana");
        
        if (isset($_POST['login'])){
            if($_POST['login'] == $user[1] and $_POST['senha'] == $senha[1]){
                $_SESSION['login'] = $user[1];
                $_SESSION['senha'] = $senha[1];
                echo "<br>" . "Bem-vindo";
                $an = 1;
            }else{
                header('Location: logino.php');
                $an = 0;
            }
        }
        if (isset($_COOKIE['login']) and $an != 1){
            if($_COOKIE['login'] == $user[1] and $_COOKIE['senha'] == $senha[1]){
                echo "<br>" . "Bem-vindo";
            }else{
                header('Location: logino.php');
            }
        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <input type="submit" name="salvar" value="Cookie?">
    </form>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <input type="submit" name="sair" value="Sair">
    </form>
    <?php
        if(isset($_GET['salvar'])){
            setcookie("login", $user[1], time() + (60*5), '/');
            setcookie("senha", $senha[1], time() + (60*5), '/');
        }
        if(isset($_GET['sair'])){
            session_unset();
            print_r($_SESSION);
            if(isset($_COOKIE)){
                unset($_COOKIE);
            }
            header('Location: logino.php');
        }
    ?>
</body>
</html>
