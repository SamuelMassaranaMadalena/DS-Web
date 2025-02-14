function parcheck(){
    var parimp = Number(window.document.getElementById("numero").value);
    var resultado = (parimp%2) == 1?"ímpar":"par";
    document.getElementById("praga").innerText = resultado;
}
