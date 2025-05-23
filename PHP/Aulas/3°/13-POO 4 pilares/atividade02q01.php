<?php

    class Pessoa {
        public $nome;
        protected $idade;

    }

    class Funcionario extends Pessoa {
        protected $salario;
        protected function calcularBonus($a){
            return 0;   
        }
    }

    class Gerente extends Funcionario {
        public function calcularBonus($a){
            $a *= 1.20;
            return $a;
        }
    }

    class Desenvolvedor extends Funcionario {
        public function calcularBonus($a){
            $a *= 1.10;
            return $a;
        }
    }

    $gerencia = new Gerente();
    $dev = new Desenvolvedor();
    $salario = 1518.00;

    echo "salario: ".$salario."<br>";
    echo "salario do Gerente: ".$gerencia->calcularBonus(1518.00)."<br>";
    echo "salario do Desenvolvedor: ".$dev->calcularBonus(1518.00)."<br>";

?>