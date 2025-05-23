<?php
    $texto = "cliente/bruno";
    $tekto = "cliente/cAmpos";
    $tento = "cliente/Brino";

    if(preg_match('/^cliente\/([a-zA-Z]+)$/', $tekto, $matches)){
        $_GET['nome'] = ($matches[1]);
        echo $_GET['nome'];
    }
?>
