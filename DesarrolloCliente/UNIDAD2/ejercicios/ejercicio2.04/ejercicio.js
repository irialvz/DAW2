let error = false;
let numeroA = prompt("Numero A?");
numeroA = Number(numeroA);
if (isNaN(numeroA) || typeof numeroA === "string"){
    error = true;
    alert("El numero no es valido")
}
let numeroB = prompt("Numero B");
numeroB = Number(numeroB);
if (isNaN(numeroB) || typeof numeroB === "string"){
    error = true;
    alert("El numero no es valido")
}
if (!error){
    document.getElementById("numeroA").innerHTML += numeroA;
    document.getElementById("numeroB").innerHTML += numeroB;

    let numAmultiploB = false;
    let numBmultiploA = false;
    if ( numeroA % numeroB == 0){
        numAmultiploB = true;
    }else if (numeroB % numeroA == 0){
        numBmultiploA = true;
    }

    document.getElementById("multiploA").innerHTML += numAmultiploB;
    document.getElementById("multiploB").innerHTML += numBmultiploA;
}

