<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <input type="text" name="cpf">
        <input type="submit">
    </form>
</body>
<?php
    class Documento {
        private $numero;

        public function getNumero(){}
        public function setNumero(){}
    }

    class CPF extends Documento {
        public function valida($cpf){
            $cpf = str_replace(".", "", $cpf);
            $cpf = str_replace("-", "", $cpf);
            
            if (strlen($cpf) != 11){
                return false;
            }
            // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
            if (preg_match('/(\d)\1{10}/', $cpf)) {
                return false;
            }    
            // Faz o calculo para validar o CPF
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
            return true;            
        }
    }

    $CPF = new CPF;
    if(isset($_POST['cpf'])){
        if($CPF->valida($_POST['cpf']) == true){
            echo "Válido";
        }else{
            echo "Inválido";
        }
    }
?>
</html>