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
        case 2:
            let dividendo
            break;
        case 3:
            
            break;
        case 4:
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
            document.getElementById("ovni").innerHTML = comprobarMinMayus(OVNI);
            document.getElementById("info").innerHTML = comprobarMinMayus(info);

            function verificar(){
                let introducir = prompt("Introduce una cadena");
                document.getElementById("introducido").innerHTML = comprobarMinMayus(introducir);
            }
            break;

    }
}