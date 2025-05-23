<?php
    $subRota = $caminho[1] ?? NULL;

    switch($subRota){
        case "":
            if(count($_POST)>0 && isset($_FILES['fotoUsuario'])){
                var_dump($_POST);
                var_dump($_FILES);
                extract($_POST);

                require_once './models/usuario.php';
                $usuario = new Usuario;
                $usuario->atualizaCadastro(
                        [':nomeUsuario' => $nomeUsuario,
                        ':emailUsuario' => $emailUsuario, 
                        ':senhaUsuario' => $senhaUsuario],
                        $_FILES
                );
            }
            require_once './models/usuario.php';
            $usuario = new Usuario;
            $dados = $usuario->queryOne([':idUsuario' => 1]);
            require './views/Usuarios/usuario.php';
            break;    
        default: 
            echo "404 - Página não encontrada";
            break;
    }

    // $id = $_GET['id'] ?? null;

    // var_dump($caminho);
?>