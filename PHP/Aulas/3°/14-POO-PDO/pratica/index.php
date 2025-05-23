<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="nome" required><br>
            <input type="email" name="email" required><br>
            <input type="submit" id="env">
        </form>
    </div> 
    <?php
        include_once 'conexao.php';
    ?>
</body>
</html>