<?php
    // session_start();
    $_SESSION['valorNome'] = "";
    $_SESSION['valorEmail'] = "";
    $_SESSION['valorObservacao'] = "";
    $erroNome = "";
    $erroEmail = "";
    $erroObservacao = "";
    $erroIdade = "";

    function limpaEntrada($dado) {
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }

    function validaCliente($nome, $email, $observacao) {
        $erroNome = "";
        $erroEmail = "";
        if (empty($nome)) {
            $erroNome = "O nome é obrigatório";
        } else {
            $nome = limpaEntrada($nome);
            if (strlen($nome) < 3) {
                $erroNome = "O campo nome precisa possuir no minimo 3 caracteres";
            }
        }

        if (empty($email)) {
            $erroEmail = "O e-mail é obrigatório";
        } else {
            $email = limpaEntrada($email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erroEmail = "Formato de e-mail inválido";
            }
        }

        if (!empty($observacao)) {
            $observacao = limpaEntrada($observacao);
            if (strlen($observacao) > 1000) {
                $_SESSION['valorObservacao'] = $observacao;
                $erroObservacao = "O campo não pode possuir mais do que 1000 caracteres";
            }
        }

        // Validação da Idade (Exemplo de numero inteiro)
        /*
        if (empty($_POST["idade"])) {
            $erroIdade = "A idade é obrigatória";
        } else {
            $idade = limpaEntrada($_POST["idade"]);
            if (!filter_var($idade, FILTER_VALIDATE_INT) || $idade <= 0) {
                $erroIdade = "Idade inválida";
            }
        }
        */

        if (empty($erroNome) && empty($erroEmail) && empty($erroObservacao)) {
            echo "Dados validados com sucesso!";
            return true;
        }else{
            echo "Erro...";
            $_SESSION['erroNome'] = $erroNome;
            $_SESSION['erroEmail'] = $erroEmail;
            if(isset($erroObservacao)){
                $_SESSION['erroObservacao'] = $erroObservacao;
            }
            
            $_SESSION['valorNome'] = $nome;
            $_SESSION['valorEmail'] = $email;
            $_SESSION['valorObservacao'] = $observacao;
            return false;
            // header("Location: ../client.php");
        }
    }
?>