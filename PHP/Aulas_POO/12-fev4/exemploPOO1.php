<?php
    class Veiculo{
        //atributos
        public $marca;
        public $modelo
        protected $seguro
        private $renavam
    
        //métodos
        public ligar(){
            return "O " . $this->modelo . "está ligado"
        }
    };

    //Instanciando meus objetos

    $polo = new Veiculo();
    $polo->marca = "Volkswagen";
    $polo->renavam = "123123123";
?>