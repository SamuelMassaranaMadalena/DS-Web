<div>
    <ul>
        <li><a class="<?= $caminho[0] === "home" || $caminho[0] === ""? "active" : ""?>" href="/MVC/home">Home</a></li>
        <li><a class="<?= $caminho[0] === "produto" ? "active" : ""?>" href="/MVC/produto">Produtos</a></li>
        <li><a class="<?= $caminho[0] === "cliente" ? "active" : ""?>" href="/MVC/cliente">Clientes</a></li>
        <li style="float: right;"><a class="<?= $caminho[0] === "usuario" ? "active" : ""?>" href="/MVC/usuario">Usuario</a></li>
    </ul>
</div>