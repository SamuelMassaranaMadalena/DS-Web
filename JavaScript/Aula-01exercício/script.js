//1
    window.alert("Bom dia , Mundo!!!");

//2
    var nome = window.prompt("Digite Seu Nome");
    var sobrenome = window.prompt("Digite seu sobrenome");
    window.alert(`${nome} ${sobrenome}`);

//3
    //soma
    var numero = Number(window.prompt("digite um valor"));
    var valor = Number(window.prompt("digite outro valor"));
    window.alert(numero + valor);
    //subtração
    var numero2 = Number(window.prompt("digite um valor"));
    var valor2 = Number(window.prompt("digite outro valor"));
    window.alert(numero2 - valor2);
    //multiplicação
    var numero3 = Number(window.prompt("digite um valor"));
    var valor3 = Number(window.prompt("digite outro valor"));
    window.alert(numero3 * valor3);
    //divisão
    var numero4 = Number(window.prompt("digite um valor"));
    var valor4 = Number(window.prompt("digite outro valor"));
    window.alert(numero4 / valor4);

//4
    var elevado = Number(window.prompt("Digite um número"));
    window.alert(elevado**3);

//5
    var temperaturaF = Number(window.prompt("Digite uma temperatura em Fahrenheit: "));
    window.alert(`em graus Celsius essa temperatura é ${(temperaturaF - 32)*5/9}`);

//6
    var capitalI = Number(window.prompt("Digite o capital inicial: "));
    var mes = Number(window.prompt("Digite a quantidade de meses que serão investidos: "));
    var taxa = Number(window.prompt("Digite a taxa mensal em porentagem"));
    var montante = capitalI*(1+(taxa/100))**mes;
    window.alert(`O valor do montante é ${montante.toFixed(2)}`);