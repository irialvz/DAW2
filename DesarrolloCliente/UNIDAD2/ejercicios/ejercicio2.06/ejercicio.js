let numeroA = prompt("numero a?")
//TODO si numeroA no es un numero,falla
document.getElementById("numeroA").innerHTML += numeroA;
let numeroB = prompt("numero b?")
//TODO si numeroB no es un numero,falla
document.getElementById("numeroB").innerHTML += numeroB;
let numeroMayor;
if (numeroA > 0 && numeroB > 0){
    if (numeroA < numeroB){
        numeroMayor = numeroA;
    }else {
        numeroMayor = numeroB;
    }
    document.getElementById("numeroMayor").innerHTML += numeroMayor;
} else {
    alert("El numero debe ser positivo")
    document.getElementById("numeroMayor").innerHTML = "<strong>El numero debe ser positivo para hacer una comparacion</strong>";

}
