function maioridade(){
    let idade = window.document.getElementById('desg').value;
    let escreve = window.document.getElementById("nt");
    console.log(idade);
    if (idade >= 18){
        escreve.innerText = "Você é maior de idade";
    }else{
        escreve.innerText = "Você é menor de idade"
    }
}