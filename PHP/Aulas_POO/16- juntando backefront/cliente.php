<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - clientes</title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/16/img/ico.svg">
    <link rel="stylesheet" href="../assets/16/style/style.css">

</head>
<body>
    <div>
    <ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu meumenu-active" title="Clientes">Clientes</a></li>
        <li><a href="#" class="meumenu" title="Produtos">Produtos</a></li>
        <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
</ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertion.php" method="post" name="formulario"> 
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
                <p class="erro-input" id="erro-nome" value="<?=isset($_SESSION['valorNome'])? $_SESSION['valorNome'] : "" ?>"><?=isset($_SESSION['erroNome']) ? $_SESSION['erroNome'] : "" ?></p>

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email">
                <p class="erro-input" id="erro-email" value="<?=isset($_SESSION['valorEmail'])? $_SESSION['valorEmail'] : "" ?>" ><?=isset($_SESSION['erroEmail']) ? $_SESSION['erroEmail'] : "" ?></p>
                
                <label for="obs">Observação do Cliente:</label>
                <textarea name="observacao" id="obs" cols="30" rows="4"></textarea>
                <p class="erro-input" id="erro-observacao" value="<?=isset($_SESSION['valorObservacao'])? $_SESSION['valorObservacao'] : "" ?>"><?=isset($_SESSION['erroObservacao']) ? $_SESSION['erroObservacao'] : "" ?></p>
                
                <input type="submit">
            </form>
        </div>
    
        <table id="clientes">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Observação</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php    
                include "conexao.php";
                echo "<h2>Exemplo de consulta com muitas linhas</h2>";
                $dados = $db->query("SELECT * FROM clientela");
                $todos = $dados->fetchAll(PDO::FETCH_ASSOC);//todos os registros retornados
                foreach($todos as $linha){
                    $idCliente = $linha['id'];
                    $nomeCliente = $linha['nome'];
                    $emailCliente = $linha['email'];
                    $obs = $linha['observacao'];

                    echo "
                        <tr>
                            <td><span>$nomeCliente</span></td>
                            <td><span>$emailCliente</span></td>
                            <td class='obser'><span class='obser'>$obs</span></td>
                            <td><a class='link-alteracao' href='clienteAlteracao.php?id=$idCliente'><span><i class='fa-solid fa-pencil'></i></span></a></td>
                            <td><a class='link-exclusao' href='delete.php?id=$idCliente'><span><i class='fa-solid fa-trash'></i></span></a></td>
                        </tr>
                    ";
                }
                
                //matando os dados de erro da sessão
                session_unset();
            ?>
        </table>
    </div>
</body>
<script src="../assets/16/JS/script.js"></script>
<script src="https://kit.fontawesome.com/d12eaa1270.js" crossorigin="anonymous"></script>
</html>