<?php

    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;

        public function getVelocidade(){
            return $this->velocidade;
        }
        public function setVelocidade($v){
            $this->velocidade = $v;
        }
    }

    class Carro extends Veiculo{
        public function acelerar(){
            return "Acelera pisando no pedal de acelerador";
        }
    }
    
    class Moto extends Veiculo {
        public function acelerar(){
            return "Acelera girando o acelerador no guidão da moto";
        }
    }

    $carrinho = new Carro;
    $motinha  = new Moto;

    $carrinho->marca = "chevrolet";
    $carrinho->modelo = "monza";
    
    $motinha->marca = "Honda";
    $motinha->modelo = "ADV 160";
    
    echo "<h1>Carro</h1>";
    echo $carrinho->acelerar()."<br>";
    $carrinho->setVelocidade(60);
    echo $carrinho->getVelocidade();
    echo "Km/h <br>";

    echo "<h1>Moto</h1>";
    echo $motinha->acelerar()."<br>";
    $motinha->setVelocidade(80);
    echo $motinha->getVelocidade();
    echo "Km/h <br>";

?>