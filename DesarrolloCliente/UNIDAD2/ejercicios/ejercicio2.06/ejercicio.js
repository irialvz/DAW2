let error = false;
let numeroA = prompt("numero a?")
numeroA = Number(numeroA);
if (typeof numeroA == "string" || numeroA < 0) {
    error = true;
    alert("numero invalido")
}
let numeroB = prompt("numero b?")
if (typeof numeroB == "string" || numeroB < 0) {
    error = true;
    alert("numero invalido")
}
if (!error) {
    document.getElementById("numeroA").innerHTML += numeroA;

    document.getElementById("numeroB").innerHTML += numeroB;
    let numeroMayor;
    if (numeroA > 0 && numeroB > 0) {
        if (numeroA < numeroB) {
            numeroMayor = numeroA;
        } else {
            numeroMayor = numeroB;
        }
        document.getElementById("numeroMayor").innerHTML += numeroMayor;
    } else {
        alert("El numero debe ser positivo")
        document.getElementById("numeroMayor").innerHTML = "<strong>El numero debe ser positivo para hacer una comparacion</strong>";

    }

}

