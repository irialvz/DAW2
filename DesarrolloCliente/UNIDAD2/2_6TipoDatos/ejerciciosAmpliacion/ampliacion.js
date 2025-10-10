let error = false;
let numeroEjercicio = prompt("Numero del ejercicio de ampliacion");
numeroEjercicio = Number(numeroEjercicio);
if (numeroEjercicio < 0 || numeroEjercicio > 3 || typeof numeroEjercicio == "string") {
    error = true;
    alert("Numero ejercicio invalido")
} else {
    switch (numeroEjercicio) {
        case 1: {
            let error = false;
            let NotaProyecto = prompt("Nota del proyecto");
            if (isNaN(NotaProyecto) || NotaProyecto < 0 || NotaProyecto > 10) {
                error = true;
                alert("Numero invalido");
            }
            let NotaExamen = prompt("Nota del examen");
            if (isNaN(NotaProyecto) || NotaProyecto < 0 || NotaProyecto > 10) {
                error = true;
                alert("Numero invalido");
            }
            let mediaResultante = 0.0;
            let calificacion = "";
            if (!error) {
                mediaResultante = (NotaProyecto * 0.60) + (NotaExamen * 0.40);
                if (NotaProyecto < 4, 5 || NotaExamen < 4, 5) {
                    calificacion = "Suspenso"
                } else if (NotaProyecto >= 4, 5 && NotaExamen >= 4, 5 && mediaResultante < 5) {
                    calificacion = "Suspenso"
                } else if (NotaProyecto >= 4, 5 && NotaExamen >= 4, 5 && mediaResultante >= 5 && mediaResultante < 7) {
                    calificacion = "Aprobado";
                } else if (NotaProyecto >= 4, 5 && NotaExamen >= 4, 5 && mediaResultante >= 5 && mediaResultante >= 7 && mediaResultante <= 9) {
                    calificacion = "Notable";
                } else {
                    calificacion = "Sobresaliente";
                }
                document.getElementById("media").innerHTML = "<strong> La media resultante es </strong>" + mediaResultante;
                document.getElementById("calificacion").innerHTML = "<strong> La calificacion es </strong>" + calificacion;

            }
            break;
        }
        case 2: {
            let error = false;
            let NumeroDni = prompt("Numero de dni");
            let abecedario = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C',
                'K', 'E'];
            console.log(typeof NumeroDni);
            if (NumeroDni.length != 8 || NumeroDni == "" || Number(NumeroDni) < 1e7 || Number(NumeroDni) > 1e8) {
                error = true;
                alert("Longitud de numero invalido");
            }
            let LetraDni = prompt("Letra del dni?");
            if (LetraDni.length != 1 || LetraDni == "") {
                error = true;
                alert("Letra no introducida");
            } else {
                LetraDni = LetraDni.toUpperCase();
                if (!abecedario.includes(LetraDni)) {
                    error = true;
                    alert("Caracter de letra no permitido");
                }
            }
            if (!error) {
                document.getElementById("dni").innerHTML = "<strong> El DNI introducido es </strong>" + (NumeroDni.concat(LetraDni));
                //TODO calcula de la letra
            }
        }
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
            document.getElementById("numero").innerHTML += "<strong>El numero introducido es</strong> " + numeroIntroducido3;

            //if (numeroIntroducido.)
            if (numeroIntroducido3 % 2 == 0) {
                document.getElementById("tipo").innerHTML += "<strong>El tipo de numero es: </strong> par";
                let pares = calcularSiguientesPares(numeroIntroducido3);
                document.getElementById("siguientes").innerHTML += "Y los 10 siguientes son: " + pares.toString();
            } else {
                document.getElementById("tipo").innerHTML += "<strong>El tipo de numero es: </strong> impar";
                let impares = calcularSiguientesImpares(numeroIntroducido3);
                document.getElementById("siguientes").innerHTML += "Y los 10 siguientes son: " + impares.toString();
            }
            break;
        case 4: {
            let error = false;
            let numeroA = prompt("Numero A?");
            numeroA = Number(numeroA);
            if (isNaN(numeroA) || typeof numeroA === "string") {
                error = true;
                alert("El numero no es valido")
            }
            let numeroB = prompt("Numero B");
            numeroB = Number(numeroB);
            if (isNaN(numeroB) || typeof numeroB === "string") {
                error = true;
                alert("El numero no es valido")
            }
            if (!error) {
                document.getElementById("numeroA").innerHTML = "El numero A introducido es:" + numeroA;
                document.getElementById("numeroB").innerHTML = "El numero B introducido es:" + numeroB;

                let numAmultiploB = false;
                let numBmultiploA = false;
                if (numeroA % numeroB == 0) {
                    numAmultiploB = true;
                } else if (numeroB % numeroA == 0) {
                    numBmultiploA = true;
                }

                document.getElementById("multiploA").innerHTML = "<strong>Es el numero A multiplo de numero B?: </strong>" + numAmultiploB;
                document.getElementById("multiploB").innerHTML = "<strong>Es el numero B multiplo de numero A?: </strong>" + numBmultiploA;
            }
            break;
        }
        case 5: {
            const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            for (let i = 0; i <= meses.push(); i++) {
                document.getElementById("meses").innerHTML = "<strong>Los meses del año son:</strong>" + meses[i].toString() + '\n';
            }
            break;
        }
        case 6: {
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
                document.getElementById("numeroA6").innerHTML = "<strong>El numero A es:</strong>" + numeroA;

                document.getElementById("numeroB6").innerHTML = "<strong>El numero B es:</strong>" + numeroB;
                let numeroMayor;
                if (numeroA > 0 && numeroB > 0) {
                    if (numeroA < numeroB) {
                        numeroMayor = numeroA;
                    } else {
                        numeroMayor = numeroB;
                    }
                    document.getElementById("numeroMayor").innerHTML = "<strong>El numero mayor es:</strong>" + numeroMayor;
                } else {
                    alert("El numero debe ser positivo")
                    document.getElementById("numeroMayor").innerHTML = "<strong>El numero debe ser positivo para hacer una comparacion</strong>";
                }
            }
            break;
        }
        case 7: {
            let numeros = [];
            const limite = 30;
            for (let i = 0; i <= limite; i++) {
                numeros.push(i);
            }
            document.getElementById("numeros30").innerHTML = "<strong>Los 30 primeros numeros son: </strong>" + numeros.join(",");
            break;
        }
        case 8: {
            let error = false;
            let numero = prompt("numero?");
            numero = Number(numero);
            if (isNaN(numero) || typeof numero === "string") {
                error = true;
                alert("numero no valido");
            }
            if (!error) {
                let resultado = numero;
                for (let i = numero - 1; i > 1; i--) {
                    resultado *= i;
                }
                document.getElementById("factorial").innerHTML = "<strong>El factorial del numero " + numero + " es: </strong>" + resultado;
            }
            break;
        }
        case 9: {
            function ventanaEmergente() {
                let ciudad = prompt("Cual es tu ciudad favorita?");
                ciudad = ciudad.toLowerCase();
                let mensaje;
                switch (ciudad) {
                    case "zaragoza":
                        mensaje = "Capital de Aragon";
                        break;
                    case "madrid":
                        mensaje = "Capital de España,god";
                        break;
                    case "barcelona":
                        mensaje = "Capital de Cataluña";
                        break;
                    default:
                        mensaje = "Ni idea...";
                        break;
                }
                document.getElementById("mensajeCiudad").innerHTML = mensaje;

            }
        }

    }
}