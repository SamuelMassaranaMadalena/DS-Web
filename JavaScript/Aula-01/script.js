console.log("Olá, Mundo!");
//exemplo de alert
    window.alert("Olá, Mundo!");
    alert("Olá, Mundo!");
//exempo de confirm
    var msg = window.confirm("Aceitas?");
    console.log(msg);
//exemplo e prompt()
    var testePrompt = prompt("Digite seu nome")
    //exibindo o nome do usuário
    console.log(testePrompt);

//tentativa de soma
    var n1 = prompt("Digite um número");
    var n2 = prompt("Digite um número");
    alert(n1 + n2);
    console.log(typeof(n1), typeof(n2));
    //agr da certo
    n1 = Number.parseInt(n1);
    n2 = Number.parseInt(n2);
    alert(n1 + n2);
    console.log(typeof(n1), typeof(n2));

var num1 = Number.parseInt(window.prompt("Digite um valor"));
var num2 = Number.parseInt(window.prompt("Digite outro valor"));
var resultado = num1 + num2;
window.alert("O resultado é: " + resultado);