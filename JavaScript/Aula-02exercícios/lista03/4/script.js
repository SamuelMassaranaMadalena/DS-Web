function aumentPorc(a, b) {
    a = Number(window.document.getElementById('nmr').value)
    b = Number(window.document.getElementById('prct').value)
    let res = a * ((b/100) + 1);
    console.log((b/100) + 1, res);
    window.document.getElementById('praga').innerText = res;
}