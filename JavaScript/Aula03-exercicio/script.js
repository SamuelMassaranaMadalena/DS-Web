let inputNome = document.getElementById('nome');
let inputDesc = document.getElementById('descricao');
let botao = document.getElementById('butao');
var numcard = 1;

function apaga(){
    document.getElementsByTagName('body')[0].removeChild();
}

function criaCartao(){
    if (inputDesc.value != "" && inputNome.value != ""){
        let corpo = document.getElementsByTagName('body')[0];
        
        let novadiv = document.createElement('div');
        corpo.appendChild(novadiv);
        novadiv.setAttribute('class','cartoes');
        

        let nome = document.createElement('span');
        novadiv.appendChild(nome);
        nome.textContent = inputNome.value;


        let desc = document.createElement('p');
        novadiv.appendChild(desc);
        desc.textContent = inputDesc.value;

        let exclude = document.createElement('input');
        novadiv.appendChild(exclude);
        exclude.textContent = "X";
        exclude.setAttribute('class', 'exclui');
        exclude.setAttribute('type', "submit");
        exclude.setAttribute('value', 'enviar');
        

        inputDesc.value ="";
        inputNome.value ="";
        numcard += 1;
        
        exclude.addEventListener('click', apaga)
    }else{
        alert('Um ou mais dos campos não foi/foram preenchido(s)!');
    }
}

var divscards = document.getElementsByClassName('cartoes');
var escluir = document.getElementsByClassName('exclui');


function qmApaga(){
    console.log(this)
    // this.value = "a";
    return document.getElementsByTagName('body')[0].removeChild(document.getElementsByClassName('cartoes')[0]); 
}

botao.addEventListener('click', criaCartao);
// escluir.addEventListener("submit", qmApaga);




// class Cartao {

// }