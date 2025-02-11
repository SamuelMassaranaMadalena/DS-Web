// window.document.write(window.document.URL);

//Primeiro exmeplo
var p1 = window.document.getElementsByTagName('p')[0];
window.document.write(p1.innerText);
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText

//Segundo exemplo
document.getElementById("teste").innerHTML = "Hello World";

//Terceiro exemplo
var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello World!";

//Quarto exemplo
//document.querySelector("p").style.background = "red";
document.querySelector("p#paragrafo").style.backgroundColor = "blue"
var paragrafo = document.querySelector("p").style;
paragrafo.backgroundColor = "red";
paragrafo.color = "white"


//eventos
function alertadeClick(){
    alert("Você clicou no botão");
}

function calcular(){
    var numero1 = Number(document.getElementById("Numero1").value);
    var numero2 = Number(document.getElementById("Numero2").value);

    var resultado = numero1 + numero2;

    document.getElementById("resultado").innerHTML = "Resultado" + resultado;
}