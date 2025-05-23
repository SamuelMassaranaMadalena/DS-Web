<?php
    if ($url === '/') {
        require 'controllers/home.php';
    } elseif ($url === 'produto' || $url == 'produto/') {
        require 'controllers/produto.php';
    } elseif (preg_match('/^produto\/([0-9]+)$/', $url, $matches)) {
        $_GET['id'] = $matches[1];
        require 'controllers/produto.php';    
    } elseif($url == 'cliente' || $url == 'clientes' || $url == 'cliente/' || $url == 'clientes/'){
        require 'controllers/cliente.php';
    } //elseif(preg_match('/^cliente\/([0-9]+)$/', $url, $matches) || preg_match('/^clientes\/([0-9]+)$/', $url, $matches)){
        // $_GET['id'] = $matches[1];
        // require 'controllers/cliente.php';
    elseif(preg_match('/^cliente\/([a-zA-Z]+)$/', $url, $matches) || preg_match('/^clientes\/([a-zA-Z]+)$/', $url, $matches)){
        $_GET['id'] = $matches[1];
        require 'controllers/cliente.php';
    }else {
        echo "404 - Página não encontrada";
    }
    
?>