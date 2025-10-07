let error = false;
let numero = prompt("numero?");
numero = Number(numero);
if(isNaN(numero) || typeof numero === "string"){
    error = true;
    alert("numero no valido");
}
if (!error){
    let resultado = numero;
    for (let i=numero-1;i>1;i--){
        resultado *= i;
    }
    document.getElementById("factorial").innerHTML += resultado;
}