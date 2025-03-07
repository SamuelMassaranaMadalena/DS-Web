let inputNome = document.getElementById('nome');
let inputDesc = document.getElementById('descricao');
let botao = document.getElementById('butao');

function criaCartao(){
    if (inputDesc.value != "" && inputNome.value != ""){
        //var pro body
        let corpo = document.getElementsByTagName('body')[0];
        
        //var para as novas divs, junto com atributos
        let novadiv = document.createElement('div');
        corpo.appendChild(novadiv);
        novadiv.setAttribute('class','cartoes');
        
        //var pro nomezin q vai aparece e seu conteudo
        let nome = document.createElement('span');
        novadiv.appendChild(nome);
        nome.textContent = inputNome.value;

        // var do butao de deletar e seus conteudos
        let exclude = document.createElement('button');
        novadiv.appendChild(exclude);
        exclude.textContent = "X";
        exclude.setAttribute('class', 'exclui');
        exclude.setAttribute('value', 'enviar');
        
        let obr = document.createElement('br');
        novadiv.appendChild(obr);

        //var pra descricao q vai aparece e seu conteudo
        let desc = document.createElement('p');
        novadiv.appendChild(desc);
        desc.textContent = inputDesc.value;
        
        //resetando os valores dos campos
        inputDesc.value ="";
        inputNome.value ="";
        // numcard += 1;
        
        
        function apaga(){
            novadiv.remove();
        }
        //evento q apaga a div
        exclude.addEventListener('click', apaga)
        
        //css
        novadiv.style.backgroundColor = "grey";
        novadiv.style.maxWidth = "420px";
        novadiv.style.minWidth = "420px";
        novadiv.style.minHeight = "50px";
        novadiv.style.maxHeight = "fit-content";
        novadiv.style.padding = "15px";
        novadiv.style.margin = "20px";
        novadiv.style.display = "inline-block";
        novadiv.style.alignContent = "right";
        novadiv.style.position = "relative";
        novadiv.style.borderRadius = "10px"
        

        nome.style.fontSize = "Large";
        nome.style.overflowWrap = "break-word"; //IA em ajudou a fazer esse CSS que quebra a linha automaticamente, caso essa palavra for muito grande e não houver espaços (" ") nela
        nome.style.display = "inline-block"; 
        nome.style.whiteSpace = "normal";
        nome.style.maxWidth = "350px"
        
        exclude.style.borderRadius = "20px";
        exclude.style.border = "0";
        exclude.style.height = "30px";
        exclude.style.width = "30px"
        exclude.style.position = "absolute";
        exclude.style.right = "0";
        exclude.style.transform = "translate(-10px, 5px)";
        exclude.style.backgroundColor = "red";

        
        desc.style.paddingRight = "50px"
        desc.style.overflowWrap = "break-word"; //IA em ajudou a fazer esse CSS que quebra a linha automaticamente, caso essa palavra for muito grande e não houver espaços (" ") nela
        desc.style.display = "inline-block"; 
        desc.style.whiteSpace = "normal";
        desc.style.maxWidth = "390px";
    
        function mousecima(){
            exclude.style.backgroundColor = "darkred"
        }

        function mousesai(){
            exclude.style.backgroundColor = "red";
        }
        exclude.addEventListener('mousemove', mousecima);
        exclude.addEventListener('mouseout', mousesai)
    }else{
        alert('Um ou mais dos campos não foi/foram preenchido(s)!');
    }
}

botao.addEventListener('click', criaCartao);
