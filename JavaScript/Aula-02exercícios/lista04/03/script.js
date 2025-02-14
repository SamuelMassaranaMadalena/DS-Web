function logue(){
    let usario = window.document.getElementById('user').value;
    let sena = window.document.getElementById('paswd').value;
    if (usario == "admin" && sena == "12345"){
        window.alert("Bem Vindo(a)")
    }else{
        window.alert("Erro Usuário e/ou Senha Incorretos")
    }
}