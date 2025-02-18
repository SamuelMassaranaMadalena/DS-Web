window.document.write('<input type="text" id="escreva">');
let escrev = window.document.getElementById('escreva');
window.document.write(`<input type="text" readonly id="copia" value="${escrev.value}">`);
function escreveDuplo(){
    let copia = window.document.getElementById('copia');
    copia.value = escrev.value;
    console.log(escrev.value);
    console.log(copia.value);   
}

escrev.addEventListener('keyup', escreveDuplo);