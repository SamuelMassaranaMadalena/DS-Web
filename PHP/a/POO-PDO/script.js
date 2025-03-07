//Função para validação dos dados do Cliente
function validarDadosCliente(){

    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
        alert("Preencha o campo nome corretamente!\nVerifique se o nome possui mais do que 2 caracteres.");
        return false;
    }

    
    if(formulario.email.value == "" || 
        formulario.email.value.indexOf('@')==-1 || 
        formulario.email.value.indexOf('.')==-1){
        formulario.email.focus();
        alert("Preencha o campo email corretamente!");
        return false;

    }

    if(formulario.observacao.value.length > 1000){
        formulario.observacao.focus();
        alert("Excedeu a capacidade de caracteres!\nNo momento possui "+formulario.observacao.value.length);
        return false;
    }


    

}