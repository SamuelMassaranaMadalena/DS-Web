<?php
    $frutas = array("Banana", "Tomate", "Morango", "Melão", "Jaca");
    $x = 0;
    foreach ($frutas as $ex) {
        echo "$ex <br>";
    }
    echo "<br>";
    $frutas[] = "Pitaia"; 
    foreach ($frutas as $exo) {
        echo $exo . "<br>";
    }
    print_r($frutas);
    echo "<br>";
    
    sort($frutas);
    echo "<br>";
    do{
        echo $frutas[$x] . "<br>";
        $x++;

    }while($x<5);
    print_r($frutas);
    echo "<br>";
    echo "<br>";

    $nome = array('T' => "Teclado", 'L' => "Liquidificador");
    $preco = array('T' => 120.50, 'L' => 150.00);
    $estoque = array('T' => 15, 'L' => 10);
    echo $nome['T'] . "<br>";
    echo "R$" . $preco['T'] . "<br>";
    echo $estoque['T'] . "<br>";
    echo $nome['L'] . "<br>";
    echo "R$" . $preco['L'] . "<br>";
    echo $estoque['L'] . "<br>";
    echo "<br>";
    
    $preco = array('T' => 99.99, 'L' => 129.99);
    echo $nome['T'] . "<br>";
    echo "R$" . $preco['T'] . "<br>";
    echo $estoque['T'] . "<br>";
    echo $nome['L'] . "<br>";
    echo "R$" . $preco['L'] . "<br>";
    echo $estoque['L'] . "<br>";
    echo "<br>";
    
    $unidades = 5;
    $valortotal = array(($preco['T']*$unidades), ($preco['L']*$unidades));
    echo $valortotal[0] . "<br>";
    echo $valortotal[1] . "<br>";
    echo "<br>";

    $umcontendo = array("Teclado", "Mouse", "Monitor");
    $outrocontendo = array(150.00, 80.00, 1200.00);
    $combineosdois = array('Teclado' => 150.00, 'Mouse' => 80.00, 'Monitor' => 1200.00);
    echo $combineosdois['Teclado'] . "<br>";
    echo $combineosdois['Mouse'] . "<br>";
    echo $combineosdois['Monitor'] . "<br>";
    print_r($combineosdois);
    echo "<br>";
    echo "<br>";

    $arraydecores = array("vermelho", "azul", "verde", "amarelo", "preto");
    if(in_array("verde", $arraydecores)){
        echo "Tem verde";
    }else{
        echo "Não tem verde";
    }
    echo "<br><br>";

    $arraydenum = array(48, 3, 4, 32, 514, 3000, 250);
    $numedia = count($arraydenum);
    $somadas = array_sum($arraydenum);
    echo $somadas . "<br>";
    echo ($somadas/$numedia)

?>