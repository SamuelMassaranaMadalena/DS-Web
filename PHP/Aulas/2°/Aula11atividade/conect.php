<?php
    $host = "localhost";//determina variável pro host
    $usuario = "root";//determina variável pro usuário do phpmyadmin 
    $senha = "usbw";//determina variável pra senha
    $banco = "floricultura";//determina variável pro banco de dados

    $conexao = mysqli_connect($host,$usuario,$senha,$banco);
    //variável com função que conecta ao banco de dados essa função precisa do host, usuario e senha do phpmyadmin e do nome do banco de dados
    if(!$conexao){
        die('Erro na conexão: ' . mysqli_connect_error());
        //se não houver aquela variável exibe o erro e para de executar
    }
    // echo '<h4 class="err">Conexão feita com sucesso!</h4><br><br><br><br>';
?>