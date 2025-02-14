function maior(){
    let digito = Number(window.document.getElementById('digitoz').value);
    let numero = Number(window.document.getElementById('numeriz').value);
    let valoro = Number(window.document.getElementById('valoriz').value);
    if (valoro > numero && valoro > digito){
        window.document.getElementById('escrita').innerText = `O maior valor é ${valoro}`;
    }else{
        if (numero > valoro && numero > digito){
            window.document.getElementById('escrita').innerText = `O maior valor é ${numero}`;
        }else{
            window.document.getElementById('escrita').innerText = `O maior valor é ${digito}`;
        }
    }
    // também é possível usar Math.max(arg1,arg2,arg3) que retorna o maior valor
}