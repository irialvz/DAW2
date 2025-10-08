let error = false;
let numeroEjercicio = prompt("Numero del segundo bloque de ejercicios 2.12 ?");
numeroEjercicio = Number(numeroEjercicio);
if (numeroEjercicio < 0 || numeroEjercicio >= 6 || typeof numeroEjercicio == "string") {
    error = true;
    alert("Numero ejercicio invalido")
} else {
    switch (numeroEjercicio) {
        case 1:
            const mensaje = 
            new String("Hola a todo el Mundo!\nQué facil es incluir \'comillas simples\' \n y \"comillas dobles \"");
            alert(mensaje);
            break;
        case 2: {
            let error = false;
            let dividendo = prompt("Numero dividendo?");
            dividendo = Number(dividendo);
            if (dividendo == null || typeof dividendo == "string"){
                error = true;
                alert("numero invalido")
            }
            let divisor = prompt("Numero divisor multiplo de dos?");
            divisor = Number(divisor);
            if (divisor == null || typeof divisor == "string" || divisor % 2 != 0){
                error = true;
                alert("numero invalido")
            }
            let resultado = 0;
            if (!error){
                resultado = dividendo>>Math.log2(divisor);
                document.getElementById("dividendo").innerHTML = "El dividendo introducido es " + dividendo;
                document.getElementById("divisor").innerHTML = "El divisor introducido es " + divisor;
                document.getElementById("resultado").innerHTML = "El resultado del desplazamiento es " + resultado;
            }
            break;

        }
            
        case 3:{
            let error = false;
            let multiplicando = prompt("Numero multiplicando?");
            multiplicando = Number(multiplicando);
            if (multiplicando == null || typeof multiplicando == "string"){
                error = true;
                alert("numero invalido")
            }
            let multiplicador = prompt("Numero multiplicador multiplo de dos?");
            multiplicador = Number(multiplicador);
            if (multiplicador == null || typeof multiplicador == "string" || multiplicador % 2 != 0){
                error = true;
                alert("numero invalido")
            }
            let resultado3 = 0;
            if (!error){
                resultado3 = multiplicando<<Math.log2(multiplicador);
                document.getElementById("multiplicando").innerHTML = "El multiplicando introducido es " + multiplicando;
                document.getElementById("multiplicador").innerHTML = "El multiplicador introducido es " + multiplicador;
                document.getElementById("resultado3").innerHTML = "El resultado del desplazamiento es " + resultado3;
            }
            break;
        }
        case 4:
            document.getElementById("numeroMinimo").innerHTML = "El numero minimo es " + Number.MIN_VALUE;
            document.getElementById("numeroMaximo").innerHTML = "El numero maximo es " + Number.MAX_VALUE;
            document.getElementById("numeroInfinito").innerHTML = "El numero infinito es " + Number.MAX_VALUE*2;

            break;
        case 5:
            const OVNI = "OBJETO VOLADOR NO IDENTIFICADO";
            let info = "En un lugar de la mancha";
            
            function comprobarMinMayus(cadena){
                if (cadena == null || typeof cadena != "string"){
                    alert("cadena no valida");
                } else if (cadena == cadena.toLowerCase()){
                    return ("La cadena \"" + cadena + "\" esta en minusculas");
                } else if (cadena == cadena.toUpperCase()){
                    return ("La cadena \"" + cadena + "\" esta en mayusculas");
                } else if (cadena.charAt(0) == cadena.charAt(0).toUpperCase()){
                    if (cadena.substring(1,cadena.length) == cadena.substring(1,cadena.length).toLowerCase()){
                        return ("La cadena \""+cadena+"\" es initcap");
                    }
                }
            }
            document.getElementById("titulo").innerHTML = "Ejercicio 5";
            document.getElementById("boton").innerHTML = "Introduce una cadena·"
            document.getElementById("ovni").innerHTML = comprobarMinMayus(OVNI);
            document.getElementById("info").innerHTML = comprobarMinMayus(info);

            function verificar(){
                let introducir = prompt("Introduce una cadena");
                document.getElementById("introducido").innerHTML = comprobarMinMayus(introducir);
            }
            break;

    }
}