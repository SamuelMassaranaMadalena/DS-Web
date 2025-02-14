function calcula(){
    let prinum = Number(window.document.getElementById('pra').value);
    let secum = Number(window.document.getElementById('ga').value);
    let opera = window.document.getElementById('clect').value;
    let resultado;
    switch (opera){
        case "soma":
            resultado = prinum + secum;
            break;
        case "subt":
            resultado = prinum - secum;
            break;
        case "mult":
            resultado = prinum * secum;
            break;    
        case "divi":
            resultado = prinum / secum;
            break;    
        case "":
            window.alert("Selecione uma operação");
            break;
    }
    window.document.getElementById('exibir').innerText = resultado;
}