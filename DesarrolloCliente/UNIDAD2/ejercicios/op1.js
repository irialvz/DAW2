let error = false;
let numeroEjercicio = prompt("Numero del ejercicio del 2.12?");
numeroEjercicio = Number(numeroEjercicio);
if (numeroEjercicio < 0 || numeroEjercicio >= 10 || typeof numeroEjercicio == "string") {
    error = true;
    alert("Numero ejercicio invalido")
} else {
    switch (numeroEjercicio) {
        case 1:
            let nombreUsuario = prompt("Introduce tu nombre");
            let primerApellido = prompt("Introduce tu priemer apellido");
            let nombreCompleto = nombreUsuario.concat(" " + primerApellido);
            document.getElementById("nombreCompleto").innerHTML = "<strong>Nombre completo: </strong>" + nombreCompleto;

            const dia = new Date();
            let diaNacimiento = prompt("dia de nacimiento? ");
            let mesNacimiento = prompt("mes de nacimiento? ");
            let anyoNacimiento = prompt("año de nacimiento? ");
            diaNacimiento = diaNacimiento - dia.getDate();
            mesNacimiento = mesNacimiento - dia.getMonth();
            anyoNacimiento = dia.getFullYear() - anyoNacimiento;

            document.getElementById("titulo").innerHTML += "Ejercicio1";
            document.getElementById("anyo").innerHTML = "<strong>Años en vida (por desgracia):</strong>"+ anyoNacimiento.toString().split("-");
            document.getElementById("mes").innerHTML = "<strong>meses:</strong>" + mesNacimiento.toString().split("-");
            document.getElementById("dia").innerHTML = "<strong>dias:</strong>"+ diaNacimiento.toString().split("-");
            break;
        case 2:
            let error = false;
            var numeroIntroducido = prompt("Numero? ");
            numeroIntroducido = Number(numeroIntroducido);
            if (isNaN(numeroIntroducido) || typeof numeroIntroducido == "string") {
                error = true;
                alert("El numero no es valido");
            }
            if (!error) {
                document.getElementById("titulo").innerHTML += "Ejercicio2";
                document.getElementById("numero").innerHTML += "<strong>El numero introducido es</strong> "+numeroIntroducido;
                document.getElementById("exponencial").innerHTML += "<strong>El numero exponencial es </strong>"+numeroIntroducido.toExponential();
            }
            break;
        case 3:
            function calcularSiguientesPares(numeroIntroducido) {
                let siguientesPares = [];
                do {
                    if (numeroIntroducido % 2 == 0) {
                        siguientesPares.push(numeroIntroducido);
                    }
                    numeroIntroducido++;
                } while (siguientesPares.length != 10);
                return siguientesPares;
            }

            function calcularSiguientesImpares(numeroIntroducido) {
                let siguientesImpares = [];
                do {
                    if (numeroIntroducido % 2 != 0) {
                        siguientesImpares.push(numeroIntroducido);
                    }
                    numeroIntroducido++;
                } while (siguientesImpares.length != 10);
                return siguientesImpares;
            }
            let numeroIntroducido3 = prompt("Numero? ");
            document.getElementById("titulo").innerHTML += "Ejercicio3";
            document.getElementById("numero").innerHTML += "<strong>El numero introducido es</strong> "+ numeroIntroducido3;

            //if (numeroIntroducido.)
            if (numeroIntroducido3 % 2 == 0) {
                document.getElementById("tipo").innerHTML += "<strong>El tipo de numero es: </strong> par";
                let pares = calcularSiguientesPares(numeroIntroducido3);
                document.getElementById("siguientes").innerHTML += "Y los 10 siguientes son: " + pares.toString();
            } else {
                document.getElementById("tipo").innerHTML += "<strong>El tipo de numero es: </strong> impar";
                let impares = calcularSiguientesImpares(numeroIntroducido3);
                document.getElementById("siguientes").innerHTML += "Y los 10 siguientes son: "+impares.toString();
            }
            break;

    }
}