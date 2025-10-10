
let error = false;
let NumeroDni = prompt("Numero de dni");
let abecedario = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C',
'K', 'E'];
console.log(typeof NumeroDni);
if (NumeroDni.length != 8 || NumeroDni=="" || Number(NumeroDni) < 1e7 || Number(NumeroDni) > 1e8){
    error = true;
    alert("Longitud de numero invalido");
}
let LetraDni = prompt("Letra del dni?");
if (LetraDni.length != 1 || LetraDni==""){
    error = true;
    alert("Letra no introducida");
}else { 
    LetraDni = LetraDni.toUpperCase(); 
    if (!abecedario.includes(LetraDni)) {
        error = true;
        alert("Caracter de letra no permitido");
    }
}
if(!error){
    document.getElementById("dni").innerHTML = "<strong> El DNI introducido es </strong>" + (NumeroDni.concat(LetraDni));
    //TODO calcula de la letra
}