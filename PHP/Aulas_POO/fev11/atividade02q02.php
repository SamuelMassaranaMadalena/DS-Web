<?php

    abstract class Animal {
        abstract function fazerSom();
        public function mover(){
            return "Anda";
        }
    }

    class Cachorro extends Animal{
        public function fazerSom(){
            return "Late";
        }
    }

    class Gato extends Animal{
        public function fazerSom(){
            return "Mia";
        }
    }

    class Passaro extends Animal{
        public function fazerSom(){
            return "Canta";
        }
        public function mover(){
            return "Voa e " . parent::mover();
        }
    }

    $cao =  new Cachorro;
    $bichano = new Gato;
    $calopsita = new Passaro;

    echo $cao->fazerSom()."<br>" . $cao->mover()."<br>";
    echo $bichano->fazerSom()."<br>" . $bichano->mover()."<br>";
    echo $calopsita->fazerSom()."<br>" . $calopsita->mover()."<br>";

?>