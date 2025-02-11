<?php
    //1 - fazer 5 classes e objetos
    class Panela {
        public $tamanho;
        public $material;
        public $cor;
        public $modelo;
        public $marca;

        public function cozinhar_fritar($a){
            return "cozinhando " . $a . "<br>";
        }
        public function armazernar_comida($a){
            return "Armazenando " . $a . "<br>";
        }
        public function esquentar($a){
            return "esquentando " . $a . "<br>";
        }
    }

    $panelinha = new Panela();
    $panelinha->tamanho = "pequeno";
    $panelinha->material = "aço";
    $panelinha->cor = "vermelha";
    $panelinha->modelo = "frigideira";
    $panelinha->marca = "tramontina";

    echo $panelinha->cozinhar_Fritar("frango");
    echo $panelinha->armazernar_Comida("frango");
    echo $panelinha->esquentar("frango");

    class Caneta {
        public $cor;
        public $marca;
        public $quantidade_de_tinta;
        public $material;
        public $preco;

        public function escrever($a){
            return "escrevendo " . $a . "<br>";
        }
        public function pintar(){
            return "pintando " . "<br>";
        }
        public function desenhar(){
            return "desenhando " . "<br>";
        }
    }

    $caneta_azul = new Caneta();
    $caneta_azul->quantidade_de_tinta = "5ml";
    $caneta_azul->material = "madeira";
    $caneta_azul->cor = "vermelha";
    $caneta_azul->preço = 1.85;
    $caneta_azul->marca = "BIC";
    
    echo $caneta_azul->escrever("pneumoultramicrocopicossilicovulcanoconiótico");
    echo $caneta_azul->pintar();
    echo $caneta_azul->desenhar();

    class Relogio {
        public $cor;
        public $marca;
        public $modelo;
        public $material;
        public $tamanho;

        public function cronometrar($a){
            return "cronometrando até " . $a . "<br>";
        }
        public function exibir(){
            return "exibindo as horas" . "<br>";
        }
        public function despertar(){
            return "BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP BEP <br>";
        }
    }

    $smartwatch = new Relogio();
    $smartwatch->modelo = "Galaxy Fit3";
    $smartwatch->material = "metal";
    $smartwatch->cor = "preto";
    $smartwatch->tamanho = "medio";
    $smartwatch->marca = "Samsung";
    
    echo $smartwatch->cronometrar(10);
    echo $smartwatch->exibir();
    echo $smartwatch->despertar();

    class Mouse {
        public $cor;
        public $marca;
        public $quantidade_de_botões;
        public $modelo;
        public $USB;

        public function clicar(){
            return "(som de click do mouse)" . "<br>";
        }
        public function mover(){
            return "(move mouse)" . "<br>";
        }
        public function inserir_retirar(){
            return "(Windows plug in sound effect)" . "<br>";
            return "(Windows plug out sound effect)" . "<br>";
        }
    }

    $mouseG = new Mouse();
    $mouseG->quantidade_de_botões = "8";
    $mouseG->modelo = "M720W";
    $mouseG->cor = "preto";
    $mouseG->USB = "USB C, wireless";
    $mouseG->marca = "Marvo";
    
    echo $mouseG->clicar();
    echo $mouseG->mover();
    echo $mouseG->inserir_retirar();

    class Blusa {
        public $cor;
        public $marca;
        public $estampa;
        public $tecido;
        public $tamanho;

        public function vestir(){
            return "vestindo" . "<br>";
        }
        public function esquentar(){
            return "esquentou" . "<br>";
        }
        public function tirar(){
            return "tirando" . "<br>";
        }
    }

    $blusa_dfrio = new Blusa();
    $blusa_dfrio->cor = "vermelha";
    $blusa_dfrio->marca = "GAP";
    $blusa_dfrio->estampa = "Logotipo da marca";
    $blusa_dfrio->tecido = "poliester";
    $blusa_dfrio->tamanho = "GG";
    
    echo $blusa_dfrio->vestir();
    echo $blusa_dfrio->esquentar();
    echo $blusa_dfrio->tirar();

    //2 - contas bancária
    class Conta_Bancaria {
        public $nome_do_titular;
        public $numdaConta;
        public $saldo;

        public function depositar($a){
            $saldo = $this->saldo + $a;
            $this->saldo = $saldo;
            return "depositando R$" . $a . " ao seu saldo atual" . "<br>";
        }
        public function sacar($a){
            if($a > $this->saldo){
                return "saldo insuficiente" . "<br>";
            }else{
                $saldo = $this->saldo - $a;
                $this->saldo = $saldo;
                return "sacando R$" . $a . "<br>";
            }    
        }
        public function exibir_saldo(){
            return "seu saldo atual é R$" . $this->saldo . "<br>";
        }
    }
    
    $titulares = array("cliente 1", "cliente 2", "cliente 3");
    $titulares[0] = new Conta_Bancaria();
    $titulares[0]->nome_do_titular = "Rafael Lopes Cuan";
    $titulares[0]->numdaConta = 2246;
    $titulares[0]->saldo = 68.92;
    
    echo "<br><br>" . $titulares[0]->nome_do_titular . "<br>";
    echo $titulares[0]->depositar(100.00);
    echo $titulares[0]->sacar(15);
    echo $titulares[0]->exibir_saldo();

    $titulares[1] = new Conta_Bancaria();
    $titulares[1]->nome_do_titular = "Bruno Campos Fonseca";
    $titulares[1]->numdaConta = 7777;
    $titulares[1]->saldo = 0;

    echo "<br><br>" . $titulares[1]->nome_do_titular . "<br>";
    echo $titulares[1]->depositar(10);
    echo $titulares[1]->sacar(172);
    echo $titulares[1]->exibir_saldo();

    $titulares[2] = new Conta_Bancaria();
    $titulares[2]->nome_do_titular = "Gustavo Cândido" . "<br>";
    $titulares[2]->numdaConta = 8693;
    $titulares[2]->saldo = 109.63;
   
    echo "<br><br>" . $titulares[2]->nome_do_titular;
    echo $titulares[2]->depositar(1200);
    echo $titulares[2]->sacar(1123);
    echo $titulares[2]->exibir_saldo();
?>