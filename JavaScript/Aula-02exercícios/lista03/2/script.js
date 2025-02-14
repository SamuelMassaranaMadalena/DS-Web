const butao = document.getElementById("butao");
function imporpar(a){
    var a = Number(window.document.getElementById("NU1").value);
    var r = (a%2) == 1?"ímpar":"par";
    console.log(a);
    console.log(r);
    document.getElementById("aaa").innerText = r;
}
var b = Number(window.document.getElementById("NU1").value);
butao.addEventListener('click', imporpar(b));