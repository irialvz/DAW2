let nombreUsuario = prompt("Introduce tu nombre");
let primerApellido = prompt("Introduce tu priemer apellido");
let nombreCompleto = nombreUsuario.concat(" " + primerApellido);
document.getElementById("nombreCompleto").innerHTML += nombreCompleto;

const dia = new Date();
let diaNacimiento = prompt("dia de nacimiento? ");
let mesNacimiento = prompt("mes de nacimiento? ");
let anyoNacimiento = prompt("año de nacimiento? ");
diaNacimiento = diaNacimiento - dia.getDate() ;
mesNacimiento = mesNacimiento -dia.getMonth() ;
anyoNacimiento = dia.getFullYear() - anyoNacimiento;

document.getElementById("anyo").innerHTML += anyoNacimiento.toString().split("-");
document.getElementById("mes").innerHTML += mesNacimiento.toString().split("-");
document.getElementById("dia").innerHTML += diaNacimiento.toString().split("-");

