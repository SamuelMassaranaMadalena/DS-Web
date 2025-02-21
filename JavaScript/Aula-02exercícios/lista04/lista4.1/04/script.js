function msgBvLoad(){
    document.write('<div id ="divBV"></div>');
    var divBV = window.document.getElementById('divBV');
    divBV.style.textAlign = "Center";
    divBV.style.alignContent = "Center";
    divBV.style.backgroundColor = "lightgrey";
    divBV.style.margin = "auto";
    divBV.style.height = "80px";
    divBV.style.width = "300px";
    var paragrafo = document.createElement('p');
    paragrafo.textContent = "Boas vindas";
    divBV.appendChild(paragrafo);
}

addEventListener('DOMContentLoaded', msgBvLoad);