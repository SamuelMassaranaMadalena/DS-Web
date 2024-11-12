<?php
    // criando conexão com o BD
    $nomeServidor   = "localhost";
    $nomeBancoDados = "databasename";
    $nomeUsuario	= "username";
    $senha  		= "password";

    //criando a conexão
    $conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBancoDados);

    //checando a conexao
    if(!$conexao){
        die("Falha na conexão:" . mysqli_connect_error());
    }
    echo "Conectado com sucesso!";
    mysqli_close($conexao);
?>