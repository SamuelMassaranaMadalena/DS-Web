function triangu(){
    let ladoA = Number(window.document.getElementById('Lum').value);
    let ladoB = Number(window.document.getElementById('Ldois').value);
    let ladoC = Number(window.document.getElementById('Ltres').value);
    let exibinte = window.document.getElementById('praga');
    if ((ladoA + ladoB)>ladoC && (ladoA + ladoC)>ladoB && (ladoC + ladoB)>ladoA){
        if (ladoA == ladoB && ladoB == ladoC){
            exibinte.innerText = "O triângulo é valido e é um triangulo equilátero";
        }else{
            if (ladoA == ladoB || ladoA == ladoC || ladoB == ladoC){
                exibinte.innerText = "O triângulo é valido e é um triangulo isósceles";
            }else{
                if (ladoA != ladoB && ladoB != ladoC){
                    exibinte.innerText = "O triângulo é valido e é um triangulo escaleno";
                }
            }
        }
    }else{
        exibinte.innerText = "O triângulo não é valido";
    }
}