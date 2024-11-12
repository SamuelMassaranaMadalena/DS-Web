<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function soma($a, $b){
            $resultado = $a + $b;
            return $resultado;
        }
        function sub($a, $b){
            $resultado = $a - $b;
            return $resultado;
        }
        function mult($a, $b){
            $resultado = $a * $b;
            return $resultado;
        }
        function divi($a, $b){
            $resultado = $a / $b;
            return $resultado;
        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">    <!-- php echo $_SERVER["PHP_SELF"]; serve para que não mude de página ao entregar o formulário-->
        <h2>Calculadora</h2>
        <label for="pri">Primeiro Valor</label>
        <input type="number" name="pri" id="pri" required min="-9999" max="9999">
        <label for="seg">Segundo Valor</label>
        <input type="number" name="seg" id="seg" required min="-9999" max="9999">
        <label for="choice">Operação</label>
        <Select name="math" id="choice" required>
            <option value="">Selecione</option>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mult">x</option>
            <option value="divi">÷</option>
        </Select>
        <input type="submit" name="env" id="enviar" value="calcular">
        <input type="reset" name="res" value="Limpar"> <br>

        <?php
            if(!empty($_POST)){
                $primeiro = $_POST['pri'];
                $segundo = $_POST['seg'];
                $op = $_POST['math'];
                $segundomostra = "";
                if ($segundo<0){
                    $segundomostra = "($segundo)";
                }
                if($op == "divi" && $segundo == 0){
                    echo '<b class="mei">Impossível dividir por zero</b>';
                }
                else{
                    if($op == "add"){
                        if($segundo<0){
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " + " . $segundomostra . "</b></span><br>";
                        } 
                        else{
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " + " . $segundo . "</b></span><br>";
                        }
                        echo '<span><b>Resultado:</b></span>' . '<span class="spanii"><b>' . soma($primeiro, $segundo) . "</b></span>";
                    }
                    if($op == "sub"){
                        if ($segundo<0){
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " - " . $segundomostra . "</b></span><br>";
                        }
                        else{
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " - " . $segundo . "</b></span><br>";
                        }
                        echo '<span><b>Resultado:</b></span>' . '<span class="spanii"><b>' . sub($primeiro, $segundo) . "</b></span>";
                    }
                    if($op == "mult"){
                        if ($segundo<0){
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " x " . $segundomostra . "</b></span><br>";
                        }
                        else{
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " x " . $segundo . "</b></span><br>";
                        }
                        echo '<span><b>Resultado:</b></span>' . '<span class="spanii"><b>' . mult($primeiro, $segundo) . "</b></span>";
                    }
                    if($op == "divi"){
                        if ($segundo<0){
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " ÷ " . $segundomostra . "</b></span><br>";
                        }
                        else{
                            echo '<span class="spanii" id="i"><b>' . $primeiro . " ÷ " . $segundo . "</b></span><br>";
                        }
                        echo '<span><b>Resultado:</b></span>' . '<span class="spanii"><b>' . divi($primeiro, $segundo) . "</b></span>";
                    }
                }
            }        
        ?>

    </form>
    <p><a href="javascript: history.back()">Voltar</a></p>
</body>
</html>