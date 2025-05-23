<?php
    session_start();// começa a sessão
    setcookie('login', $_SESSION['login'], time() + 6000, '/');//cria um cookie pro login
    setcookie('senha', $_SESSION['senha'], time() + 6000, '/');//cria um cookie para a senha

    header('Location: login.php');//volta pra página home
?>