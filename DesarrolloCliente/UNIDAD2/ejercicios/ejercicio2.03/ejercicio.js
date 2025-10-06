function calcularSiguientesPares(numeroIntroducido){
    let siguientesPares = [];
    do {
        if(numeroIntroducido%2==0){
            siguientesPares.push(numeroIntroducido);
        }
        numeroIntroducido++;
    } while (siguientesPares.length != 10);
    return siguientesPares;
}

function calcularSiguientesImpares(numeroIntroducido){
    let siguientesImpares = [];
    do {
        if(numeroIntroducido%2!=0){
            siguientesImpares.push(numeroIntroducido);
        }
        numeroIntroducido++;
    } while (siguientesImpares.length != 10);
    return siguientesImpares;
}
let numeroIntroducido = prompt("Numero? ");
document.getElementById("numero").innerHTML += numeroIntroducido;

//if (numeroIntroducido.)
if (numeroIntroducido % 2 == 0) {
    document.getElementById("tipo").innerHTML += "par";
    let pares = calcularSiguientesPares(numeroIntroducido);
    document.getElementById("siguientes").innerHTML += pares.toString();
} else {
    document.getElementById("tipo").innerHTML += "impar";
    let impares = calcularSiguientesImpares(numeroIntroducido);
    document.getElementById("siguientes").innerHTML += impares.toString();

}