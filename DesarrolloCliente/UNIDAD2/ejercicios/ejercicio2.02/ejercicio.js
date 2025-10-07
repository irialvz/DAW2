let error = false;
let numeroIntroducido = prompt("Numero? ");
numeroIntroducido = Number(numeroIntroducido);
if (isNaN(numeroIntroducido) || typeof numeroIntroducido == "string"){
    error = true;
    alert("El numero no es valido");
}
if(!error){
document.getElementById("numero").innerHTML += numeroIntroducido;
document.getElementById("exponencial").innerHTML += numeroIntroducido.toExponential();


}
