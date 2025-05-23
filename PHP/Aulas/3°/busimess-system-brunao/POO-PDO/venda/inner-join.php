$contVenda = 0;
foreach($todos as $linha){
    extract($linha);
        if ($contVenda != $linha['idVenda']) {
            // Fecha tabela anterior (exceto na primeira iteração)
            if ($contVenda !== null) {
                echo "</table><br>";
            }
            
            $contVenda = $linha['idVenda'];
            
            echo "<table id='clientes'";
            echo "<tr>";
                echo "<th colspan='3'>Nº da Venda: ".$linha['idVenda']."</th>";
            echo "</tr>";
            echo "<tr>";
                $data = new DateTime($dataVenda);
                echo "<th colspan='3'>Data da Venda: ".$data->format('d/m/Y H:i:s')."</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<th colspan='3'>Cliente: ".$linha['nome']."</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Produto</th>";
                echo "<th>Quantidade</th>";
                echo "<th>Preço Unitário</th>";
            echo "</tr>";
        }
    
    echo "<tr>";
        echo "<td>".$nome."</td>";
        echo "<td>".$quantidade."</td>";
        echo "<td>R$".$preco."</td>";
    echo "</tr>";
}