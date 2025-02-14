var fundo = window.document.getElementById("praga")
let estado = 2;
function mudanca(){
    // 2 é azul, 3 é vermelho
    if (estado == 2){
        fundo.style.backgroundColor = "aqua";
        estado = 3;
    }else{
        fundo.style.backgroundColor = "red"
        estado = 2;
    }
    console.log(estado);
}