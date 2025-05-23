<?php

    /*$estado = array("São Paulo", "Rio de Janeiro", "Bahia");
    // $estado[] = "São Paulo";
    // $estado[] = "Rio de Janeiro";
    // $estado[] = "Bahia";

    echo $estado[2].'<br>';

    $estado = array('SP' => "São Paulo", 'RJ' => "Rio de Janeiro", 'BA' => "Bahia");

    //$estado['SP'] = "São Paulo";
    // $estado['RJ'] = "Rio de Janeiro";
    // $estado['BA'] = "Bahia";

    echo $estado['SP'];*/

    include_once('arrays.php');
    $variaveltexto = "e";
    echo is_array($estado) . "<br>";
    echo is_array($variaveltexto) . "<br>";

    if(is_array($variaveltexto)){
        echo "é uma array";
    }else{
        echo "não é uma array" . '<br>';
    }

    //exemplo do uso do array_unshift()
    array_unshift($estado, "Rio Grande do Sul");//adiciona no inicio
    array_push($estado, "Paraná");//adiciona no fim
    
    foreach($estado as $estadoLinha){
        echo 'Estado: ' . $estadoLinha . '<br>';
    }


    //exemplo do uso do array_shift()
    $REMOVIDO = array_shift($estado);//remove  do inicio
    echo $REMOVIDO;
    //array_push($estado, "Paraná");//adiciona do fim
    
    foreach($estado as $estadoLinha){
        echo 'Estado: ' . $estadoLinha . '<br>';
    }

    // exemplo de uso do  in_array
    if (in_array("São Paulo5", $estado)){
        echo "Estado encontrado";
    }
    if (in_array("São Paulo", $estado)){
        echo "Estado encontrado";
    }
?>