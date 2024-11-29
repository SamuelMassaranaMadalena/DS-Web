<?php
    setcookie("usuario","Samuel", time() + 60, '/');//setando o cookie
    //setcookie("usuario","Samuel", time() + 24*(60*60), '/'); cookie 24h
    //setcookie("usuario","Samuel", time() + 7*24*(60*60), '/'); cookie 7 dias 24h
    setcookie("usuarioAntigo","Bruno",time()+7*24*(60*60), '/');//exemplo de destruir cookie proxima linha
    //setcookie("usuarioAntigo","Bruno", -3600,'/')

    print_r($_COOKIE);
?>