<?php 
    // var_dump($dados);
    extract($dados);
?>

<div class="container">
    <hr>
    <div class="formulario">
        <div class="div-photo">
            <img id="User-Photo-Preview" src="<?=!empty($fotoUsuario) ? './photos/'.$fotoUsuario : "./photos/user.png";?>" class="photo-user" alt="Imagem-nao-professor">
            <p>Recomenda-se uma imagem de dimensão 200x200</p>
        </div>    
        <form action="usuario" method="POST" name="formulario" enctype="multipart/form-data">
            
            <label for="nome">Nome: </label>
            <input type="text" name="nomeUsuario" id="nome" value="<?=isset($nomeUsuario) ? $nomeUsuario : "";?>" disabled>
            <!-- <p class="erro-input" id="erro-nome"><?=isset($_SESSION['erroNome']) ? $_SESSION['erroNome'] : "";?></p> -->
            
            <label for="email">E-mail: </label>
            <input type="text" name="emailUsuario" id="email" value="<?=isset($emailUsuario) ? $emailUsuario : "";?>" disabled>
            <!-- <p class="erro-input" id="erro-email"><?=isset($_SESSION['erroEmail']) ? $_SESSION['erroEmail'] : "";?></p> -->
            
            <label for="senha">Senha: </label>
            <input type="password" name="senhaUsuario" id="senha" value="<?=isset($senhaUsuario) ? $senhaUsuario : "";?>" disabled>

            <label for="fotoUsuario">Foto de Perfil: </label>
            <input type="file" name="fotoUsuario" id="fotoUsuario" onchange="alteraImagem(this)" disabled>
            
            <!-- <label for="observacao">Observação do cliente</label>
            <textarea name="observacao" id="observacao" cols="30" rows="4"><?=isset($_SESSION['valorObservacao']) ? $_SESSION['valorObservacao'] : "";?></textarea> -->
            <!-- <p class="erro-input" id="erro-observacao"><?=isset($_SESSION['erroObservacao']) ? $_SESSION['erroObservacao'] : "";?></p> -->
            
            <input type="submit">
        </form>
    </div>
</div>
<div class="div-button-edit"><button class="button-edit" onclick="habilitarEdicao()" id="habi">Habilitar Edição</button></div>
<script>
    var verificador = 1
    function habilitarEdicao(){
        var campos = document.querySelectorAll("input");
        var bttxt = document.getElementById('habi');
        if(verificador == 1){
            verificador = 0;
            bttxt.textContent = "Desabilitar Edição";
        }else{
            verificador = 1;
            bttxt.textContent = "habilitar Edição";
        }
        campos.forEach(campo => {
            campo.disabled = verificador;
        });
    }

    function alteraImagem(imagem){
        console.log(imagem);
        const img = document.getElementById('User-Photo-Preview');
        const file = imagem.files[0];
        if(file) img.src = URL.createObjectURL(file)
    }
</script>