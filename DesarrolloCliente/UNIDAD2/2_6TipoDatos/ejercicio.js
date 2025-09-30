let nombreUsuario = prompt("Introduce tu nombre");
let primerApellido = prompt("Introduce tu priemer apellido");
let nombreCompleto = nombreUsuario.concat(" " + primerApellido);
document.getElementById("nombreCompleto").innerHTML += nombreCompleto;

let edad = prompt("Edad? ");
const d = new Date();
let nacimiento = d.getFullYear - edad;
document.getElementById("edad").innerHTML += nacimiento;


