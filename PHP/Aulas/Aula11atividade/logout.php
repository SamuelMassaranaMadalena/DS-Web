<?php
    session_start();//inicia a sessão
    session_destroy();//destrói a session geral
    setcookie('login', '', -3600, '/');//destrói os cookies colocando tempo negativo neles
    setcookie('senha', '', -3600, '/');
    header('Location: index.php');//volta pra página inicial
?>