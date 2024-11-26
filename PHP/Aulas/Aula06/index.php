<?php

    $idadeuser = 15;

    //incluindo o cabeçalho
    include('head.html');

    if($idadeuser >= 16){
        //incluindo o corpo
        include('body.html');
    }
    else{
        include('body2.html');
    }

    //incluindo o corpo em php
    require_once('body.php');

    //incluindo o rodapé
    include('footer.html');
?>