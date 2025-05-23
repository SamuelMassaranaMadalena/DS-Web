<h1>Produtos Cadastrados</h1>
<table class="produtos">
    <tr>
        <th>Nome:</th>
        <th>Preço:</th>
        <th>Estoque:</th>
    </tr>
    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                echo "<td>$nomeProduto</td>";
                echo "<td>$precoProduto</td>";
                echo "<td>$estoqueProduto</td>";
                echo "<td><a href='/demo_htaccess/3-MVC-PHP/produto/$idProduto'><button>Acessar Produto</button></a></td>";
            echo "</tr>";
            echo "<br>";
        }
    ?>
</table>
<br>
<a href="produto/cadastro"><button>CADASTRAR PRODUTOS</button></a>