<?php
    function media($a, $b){
        //usada na atividade que começa na linha 23
        //função que faz a media de dois valores
        return ($a + $b)/2;
    }

    $produto = array(
        //array de produtos
        array('nome' => 'Nesquik morango 380g', 'preco' => 17.59, 'estoque' => 20),
        array('nome' => "Xocopinho turbinado 500g", 'preco' => 7.39, 'estoque' => 10),
        array('nome' => 'Toddynho', 'preco' => 2.59, 'estoque' => 15),
    );
    echo $produto[0]['nome'] . ":   R$" . $produto[0]['preco'] . "<br>";//exibe o produto e seu respectivo preço
    echo $produto[1]['nome'] . ":   R$" . $produto[1]['preco'] . "<br>";
    echo $produto[2]['nome'] . ":   R$" . $produto[2]['preco'] . "<br>";

    $valortotal = $produto[0]['estoque'] * $produto[0]['preco'] + $produto[1]['estoque'] * $produto[1]['preco'] + $produto[2]['estoque'] * $produto[2]['preco'];
    //variavel que guarda o valor de todos os produtos no estoque
    echo $valortotal  . "<br>" . "<br>"; 


    $alunos = array(
        //array que guarda o nome dos alunos e suas notas
        array('nome' => "Jaunaí", 'Matematica' => 8.5, 'Portugues' => 8.75),
        array('nome' => "Godofredo", 'Matematica' => 6.5, 'Portugues' => 6.25),
        array('nome' => "Maniuári", 'Matematica' => 2.5, 'Portugues' => 10.0)
    );

    echo $alunos[0]['nome'] . "  "  . $alunos[0]['Matematica'] . "  " . $alunos[0]['Portugues'] . "<br>"; //exibe os alunos e suas respectivas notas
    echo $alunos[1]['nome'] . "  "  . $alunos[1]['Matematica'] . "  " . $alunos[1]['Portugues'] . "<br>";
    echo $alunos[2]['nome'] . "  "  . $alunos[2]['Matematica'] . "  " . $alunos[2]['Portugues'] . "<br>";


    echo "<br>" . $alunos[0]['nome'] . "  " . media($alunos[0]['Matematica'], $alunos[0]['Portugues']) . "<br>";//exibe a média das notas do aluno
    echo $alunos[1]['nome'] . "  " . media($alunos[1]['Matematica'], $alunos[1]['Portugues']) . "<br>";
    echo $alunos[2]['nome'] . "  " . media($alunos[2]['Matematica'], $alunos[2]['Portugues']) . "<br>";
?>