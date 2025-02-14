function oqeh(){
    let issoeh = Number(window.document.getElementById('pra').value)
    let escreva = window.document.getElementById('teto');
    if (issoeh >= 1){
        escreva.innerText = `O número ${issoeh} é positivo`;
    }else{
        if (issoeh == 0){
            escreva.innerText = `O número é zero ${issoeh}`;
        }else{
            escreva.innerText = `O número ${issoeh} é negativo`;
        }
    }
}