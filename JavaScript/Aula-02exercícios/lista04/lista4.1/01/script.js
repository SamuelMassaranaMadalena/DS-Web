document.write('<div id="corida"></div>')

let adiv = window.document.getElementById('corida');

adiv.style.height = "300px";
adiv.style.width = "300px";
adiv.style.backgroundColor = "blue";

function changecall(event){
    adiv.style.backgroundColor = "red";
    adiv.style.height = "500px";
    adiv.style.width = "500px";
}
function changecallback(event){
    adiv.style.height = "300px";   
    adiv.style.width = "300px";
    adiv.style.backgroundColor = "blue";
}
adiv.addEventListener('mousemove', changecall);
adiv.addEventListener('mouseout', changecallback)