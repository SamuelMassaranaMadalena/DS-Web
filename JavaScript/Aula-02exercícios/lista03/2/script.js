const butao = document.getElementById("butao");
var b = Number(window.document.getElementById("NU1").value);
function imporpar(a){
    var a = Number(window.document.getElementById("NU1").value);
    var r = (a%2) == 1?"ímpar":"par";
    console.log(a);
    console.log(r);
    var o = window.document.getElementsByTagName("p");
    document.getElementById("aaa").innerText = r
}

butao.addEventListener('click', imporpar(b))