<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/demo_htaccess/3-MVC-PHP/assets/CSS/style.css">
    <title>Scudttina MVC</title>
</head>
<body>
    <div>
        <ul>
        <li><a class="active" href="/demo_htaccess/3-MVC-PHP/home">Home</a></li>
        <li><a href="/demo_htaccess/3-MVC-PHP/produto">Produtos</a></li>
        <li><a href="/demo_htaccess/3-MVC-PHP/cliente">Clientes</a></li>
        <li class="linkUsuario"><a href="/demo_htaccess/3-MVC-PHP/usuario">Usuários</a></li>
        </ul>
    </div>

    <div class="container">
        <?php
            $url = $_GET['url'] ?? '/';

            require 'rotas.php';
        ?>
    </div>
    
</body>
</html>