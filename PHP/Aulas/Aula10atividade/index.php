<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade conexao BD</title>
</head>
<body>
    <?php
        include_once("conect.php");
    ?>
    <div class="onn">
        <div class="prodts">
            <form action="inserep.php" method="post">
                <label>Nome do produto: </label><br>
                <input type="text" name="nomep" required><br>
                <label>Valor: </label><br>
                <input type="text" name="valor" required><br>
                <label>Estoque: </label><br>
                <input type="text" name="estoque" required><br>
                <input type="submit">
            </form>
            <?php
                include_once("conect.php");
                $sql = "SELECT * FROM produto";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<span>ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "</span><br>";
                    }
                } else {    
                    echo "Nenhum registro encontrado.";
                }
            ?>
        </div><div class="clientes">
            <form action="inserec.php" method="post" class="ll">
                <label>Nome: </label><br>
                <input type="text" name="nomec" required><br>
                <label>Email: </label><br>
                <input type="text" name="email" required><br>
                <input type="submit">   
            </form>
            <?php
                include_once("conect.php");
                $sql = "SELECT * FROM cliente";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<span>ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "</span><br>";
                    }
                } else {    
                    echo "Nenhum registro encontrado.";
                }
            ?>
        </div>
    </div>
</body>
</html>