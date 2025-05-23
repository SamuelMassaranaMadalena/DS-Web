<?php
//arrays multidimensionais
    $produtos = array(
        'eletrodomesticos' => array(
            array('nome' => 'Geladeira', 'preco' => 3500),
            array('nome' => 'Fogão', 'preco' => 1500)
        ),
        'eletronicos' => array(
            array('nome' => 'Smartphone', 'preco' => 2500),
            array('nome' => 'Notebook', 'preco' => 4500)
        )
    );
    echo $produtos['eletrodomesticos'][0]['nome'];
    echo $produtos['eletrodomesticos'][1]['preco'];
?>