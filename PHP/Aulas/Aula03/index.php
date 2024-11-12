<?php
    function soma($a, $b){
        $resultado = $a + $b;
        echo $resultado;
    }
    function sub($a, $b){
        $resultado = $a - $b;
        echo $resultado;
    }
    function mult($a, $b){
        $resultado = $a * $b;
        echo $resultado;
    }
    function divi($a, $b){
        $resultado = $a / $b;
        echo $resultado;
    }

    $ola = 4;
    $tchau =2;

    divi($ola, $tchau);
    echo "<br>";
    mult($ola, $tchau);
    echo "<br>";
    sub($ola, $tchau);
    echo "<br>";
    soma($ola, $tchau);
    echo "<br>";
?>