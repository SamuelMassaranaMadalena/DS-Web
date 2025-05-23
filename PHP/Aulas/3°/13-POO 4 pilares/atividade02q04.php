<?php

    abstract class Produto {
        public $nome;
        public $preco;
        public $estoque;

        abstract function calcularDesconto();
        public function comprar(){
            $this->estoque = $this->estoque - 1;
        }
    }

    class Eletronico extends Produto {
        public function calcularDesconto(){
            if($this->estoque < 5){
                return "Preço com descontos: ".$this->preco * 0.90*0.90;
            }else{
                if($this->estoque >= 5){
                    return "Preço com desconto: ".$this->preco * 0.90;
                }
            }
        }
    }

    class Roupa extends Produto {
        public function calcularDesconto(){
            if($this->estoque < 5){
                return "Preço com descontos: ".$this->preco *0.80 * 0.90;
            }else{
                return "Preço com desconto: ".$this->preco * 0.80;
            }
        }
    }

    $monitor = new Eletronico;
    $terno = new Roupa;

    $monitor->nome = "Monitor Raven";
    $monitor->preco = 1000;
    $monitor->estoque = 5;

    $terno->nome = "Terno";
    $terno->preco = 1000;
    $terno->estoque = 5;

    echo $monitor->calcularDesconto()."<br>";
    $monitor->comprar();
    echo $monitor->calcularDesconto()."<br>";

    echo $terno->calcularDesconto()."<br>";
    $terno->comprar();
    echo $terno->calcularDesconto()."<br>";

?>