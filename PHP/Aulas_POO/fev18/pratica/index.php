<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <input type="text" name="nome">
        <input type="email" name="email">
        <input type="submit">
    </form> 
    <?php
        include_once 'conexao.php';
    ?>
</body>
</html>