window.document.write('<button id="butaoclica">clique</button>');
window.document.write('<p id="contaclic"></p>')
let cliques = window.document.getElementById('butaoclica'); 
let qntclc = 0
function contaClick(){
    qntclc += 1;
    window.document.getElementById('contaclic').innerText = qntclc;
}

cliques.addEventListener('click', contaClick);