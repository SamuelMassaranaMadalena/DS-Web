<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $user = $_POST['user'];
    $pswrd = $_POST['pswrd'];


    if (!empty($_POST)){
        if ($user == "aluno" && $pswrd == "sesi") {
            echo "<h1>Login Realizado com sucesso</h1>" . "<br>";
            echo '<a href="javascript: history.back()" class="as">Voltar</a>';
        }
        else{
            echo "<h1>Não foi possível realizar o login.</h1>" . "<br>";
            echo '<a href="javascript: history.back() class="as">Voltar</a>';
        }
    }

    ?> 
</body>
</html>